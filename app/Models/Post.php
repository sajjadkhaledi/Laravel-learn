<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class);
    // }

    // public function image()
    // {
    //     return $this->morphOne(Image::class, 'imageable');
    // }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
