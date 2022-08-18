<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Like;

class Post extends Model
{
    use HasFactory;

    protected $appends = [];
    protected $casts = ['is_active' => 'boolean', 'is_deleted_by_admin' => 'boolean'];
    protected $visible = ['id', 'category_id', 'user_id', 'title', 'meta_title', 'path', 'summary', 'content', 'main_image_url', 'alt_image_url', 'view_count', 'home_page_placement', 'is_active', 'is_deleted_by_admin'];
    protected $fillable = [];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comments::class);
    }

    public function tags() {
        return $this->hasMany(Tag::class);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }
}
