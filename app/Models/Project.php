<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Project extends Model
{
use HasFactory;


protected $fillable = [
'title',
'slug',
'excerpt',
'body',
'thumbnail',
'stack',
'demo_url',
'repo_url',
'published_at',
];


protected $casts = [
'published_at' => 'datetime',
];
}