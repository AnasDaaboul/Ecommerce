<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Client extends Model
{
    use HasFactory, HasRoles;

    protected $fillable =
    [
        'gender',
        'age'
    ];

    public function userable()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function favourites()
    {
        return $this->hasMany(Favourite::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function likeable()
    {
        return $this->morphMany(Like::class , 'likeable');
    }
}
