<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Spatie\Translatable\Facades\Translatable;
use Spatie\Translatable\HasTranslations;

class Exercise extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'question',
        'picture',
        'answer',
        'lesson_id',
        'admin_id',
        'options',
    ];
    protected $translatable = [
        'options',
        'question'
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
