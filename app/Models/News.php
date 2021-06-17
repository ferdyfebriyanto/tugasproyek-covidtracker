<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class News extends Model
{
    protected $table='news'; 
    protected $primaryKey='id';
    protected $fillable=[
        'gambar',
        'judul',
        'konten',
        'kategori',
        'penulis',
    ];

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
