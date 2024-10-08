<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Besin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'fiyat', 'image', 'description',
    ];

}
