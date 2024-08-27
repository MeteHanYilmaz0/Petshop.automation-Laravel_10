<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hayvan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'yas', 'fiyat', 'cins_adi', 'renk', 'category_id', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
