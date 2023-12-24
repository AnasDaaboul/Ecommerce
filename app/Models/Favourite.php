<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;

    public function clients()
    {
        return $this->belongsTo(Client::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
