<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    protected $translatedAttributes =
    [
        'name'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function option()
    {
        return $this->hasMany(Option::class);
    }

    // public function subcategories()
    // {
    //     return $this->belongsToMany(category::class , 'subcategory', 'category_id', 'subcategory_id' );
    // }

}
