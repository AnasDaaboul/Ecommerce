<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'comment',
        'rate',
        'client_id',
        'reviewsable_type',
        'reviewsable_id',
        'review_id',
    ];

    public function reviewsable()
    {
        return $this->morphTo();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function isLiked()
    {
        $user = Auth::user();
        $client = Client::find($user->userable_id);

        return $this->likes()
            ->where('likeable_id', $client->id)
            ->exists();
    }

}
