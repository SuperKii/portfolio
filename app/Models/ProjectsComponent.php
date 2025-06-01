<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsComponent extends Model
{
    use HasFactory;
    protected $table = 'projects_component';
    protected $fillable = [
        'title',
        'description',
        'image',
        'link_github',
        'link_web'
    ];
}
