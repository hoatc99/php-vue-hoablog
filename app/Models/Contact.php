<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $appends = [];
    protected $casts = [];
    protected $visible = ['id', 'fullname', 'email', 'phone', 'message', 'is_active'];
    protected $fillable = ['fullname', 'email', 'phone', 'message'];
}
