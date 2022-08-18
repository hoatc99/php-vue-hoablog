<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Tag extends Model
{
    use HasFactory;

    protected $appends = [];
    protected $casts = [];
    protected $visible = ['id', 'post_id', 'tag'];
    protected $fillable = [];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
