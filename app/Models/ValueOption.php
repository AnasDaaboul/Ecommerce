<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class ValueOption extends Model implements TranslatableContract
{
    use HasFactory , Translatable;
    protected $fillable = ['option_id' , 'product_id'];
    public $translatedAttributes = ['name'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
