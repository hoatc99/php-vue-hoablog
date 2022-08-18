<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $appends = [];
    protected $casts = ['is_active' => 'boolean'];
    protected $visible = ['id', 'email', 'is_active'];
    protected $fillable = [];
}
