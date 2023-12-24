<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia , TranslatableContract
{
    use HasFactory, InteractsWithMedia , Translatable;
    protected $fillable = ['price' , 'discount' , 'dis_amount' , 'vendor_id' ];
    public $translatedAttributes = ['description', 'name' , 'title'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover')
             ->onlyKeepLatest(5);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(100)
              ->height(90)
              ->sharpen(2);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function favourites()
    {
        return $this->hasMany(Favourite::class);
    }

    public function reviewsable()
    {
        return $this->morphMany(Review::class , 'reviewsable');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function value_options()
    {
        return $this->hasMany(valueOption::class);
    }

    public function isFavorited()
    {
        $user = Auth::user();
        $client = Client::find($user->userable_id);

        return $this->favourites()
            ->where('client_id', $client->id)
            ->exists();
    }

}

