<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    protected $appends = ['numberOfPosts'];
    protected $casts = [];
    protected $visible = ['id', 'title', 'meta_title', 'path'];
    protected $fillable = ['title', 'meta_title', 'path'];

    public function getNumberOfPostsAttribute() {
        return $this->posts->count();
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
