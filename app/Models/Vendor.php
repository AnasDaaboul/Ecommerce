<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Vendor extends Model
{
    use HasFactory, HasRoles;

    protected $fillable =
    [
        'company_name',
    ];

    public function userable()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
