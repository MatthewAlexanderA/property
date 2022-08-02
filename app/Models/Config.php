<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $table = 'configs';
    protected $fillable = ['id', 'title', 'favicon', 'logo', 'metadata', 'fb', 'twit', 'in', 'ig', 'yt', 'wa', 'address', 'phone'];
}
