<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
// use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements HasMedia , MustVerifyEmail
{
    use HasFactory, InteractsWithMedia, HasRoles , AuthenticatableTrait , Notifiable;

    protected $fillable =
    [
        'name',
        'email',
        'password',
        'phone',
        'city_id',
        'email_verified_at',
        'userable_type',
        'userable_id',

    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('profile')
             ->singleFile();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(35)
              ->height(35)
              ->sharpen(10);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function userable()
    {
        return $this->morphTo(Vendor::class,'userable');
    }

    // public function model(): MorphTo
    // {
    //     return $this->morphTo();
    // }
}
