<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;
    protected $table = 'titles';
    protected $fillable = ['id', 'property_title', 'property_desc', 'testimonial_title', 'testimonial_desc', 'blog_title', 'blog_desc', 'footer_title', 'footer_desc', 'footer_button', 'footer_nav', 'contact_title', 'contact_desc'];
}
