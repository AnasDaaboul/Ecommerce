<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Option extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = [ 'category_id'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function value_options()
    {
        return $this->hasMany(valueOption::class);
    }
}
