<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Comment extends Model
{
    use HasFactory;

    protected $appends = [];
    protected $casts = [];
    protected $visible = ['id', 'parent_id', 'post_id', 'author', 'message'];
    protected $fillable = ['author', 'email', 'message'];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
