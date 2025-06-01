<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicComponent extends Model
{
    use HasFactory;
    protected $table = 'basic_component';
    protected $fillable = [
        'logo',
        'home_name',
        'home_description',
        'home_image',
        'about_description',
        'about_skill',
        'about_image'
    ];
}
