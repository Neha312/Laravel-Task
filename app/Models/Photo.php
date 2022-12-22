<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Image;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];
    //public $timestamps = false

    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
