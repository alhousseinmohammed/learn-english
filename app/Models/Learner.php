<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    use HasFactory;
        protected $fillable = [
        'user_id', 'experience_points', 'current_streak',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }

    public function refillHearts() {
        $currentDate = now();

        // Here you could check the last heart refill condition if needed
        // if ($this->updated_at === null || $currentDate->diffInDays($this->updated_at) >= 1) {
            // Refill hearts (you could add logic for actual heart management here)
            // $this->current_streak = 0; // Reset current streak (as per your logic)
        $this->current_hearts = 5;
            $this->save();

        // }
    }



}
