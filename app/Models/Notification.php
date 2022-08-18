<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Notification extends Model
{
    use HasFactory;

    protected $appends = [];
    protected $casts = [];
    protected $visible = ['id', 'user_id', 'message', 'is_read'];
    protected $fillable = [];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
