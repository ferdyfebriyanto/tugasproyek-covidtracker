<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;

class Category extends Model
{
    use HasFactory;
    protected $table='category'; //mendefinisikan bahwa model ini terkait dengan tabel category

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
