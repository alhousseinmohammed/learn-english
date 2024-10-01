<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
        protected $fillable = [
        'question',
        'picture',
        'answer',
        'lesson_id',
        'admin_id',
    ];

    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }
}
