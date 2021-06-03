<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $primaryKey='id';
    protected $fillable=[
        'slug',
        'title',
        'description',
        'image_path',
        'created_at',
        'updated_at',
        'user_id',
    ];
}
