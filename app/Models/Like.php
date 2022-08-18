<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Like extends Model
{
    use HasFactory;

    protected $appends = [];
    protected $casts = [];
    protected $visible = [];
    protected $fillable = [];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
