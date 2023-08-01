<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function User() {
        return $this->belongsTo(User::class);
    }

    public function Friend() {
        return $this->hasMany(Friend::class);
    }
}
