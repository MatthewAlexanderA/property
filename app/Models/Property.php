<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $fillable = ['id', 'image', 'category', 'name', 'location', 'bath', 'bed', 'room', 'area', 'price', 'side_image1', 'side_image2', 'side_image3', 'side_image4', 'content'];
}
