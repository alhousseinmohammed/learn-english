<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function theme() {
        return $this->belongsTo(Theme::class);
    }
    public function exercises() {
        return $this->hasMany(Exercise::class);
    }

    public function progress() {
        return $this->hasMany(Progress::class);
    }
}
