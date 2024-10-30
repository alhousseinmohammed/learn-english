<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'level_id'];
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
