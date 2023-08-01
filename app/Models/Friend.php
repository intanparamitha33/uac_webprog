<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    public function State() {
        return $this->belongsTo(State::class);
    }

    public function User() {
        return $this->belongsTo(User::class);
    }
}
