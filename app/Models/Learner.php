<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'experience_points',
        'current_streak',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }

    public function league()
    {
        return $this->belongsTo(League::class);
    }
    public function status()
    {
        return $this->belongsTo(related: Status::class);
    }
    public function updateLeague()
    {
        $xp = $this->experience_points;
        $league_id = League::where('xp-required', '<=', $xp)->orderBy('xp-required', 'desc')->first()->id;
        $this->league_id = $league_id;
        $this->save();
    }

    public function refillHearts()
    {
        // $currentDate = now();

        // Here you could check the last heart refill condition if needed
        // if ($this->updated_at === null || $currentDate->diffInDays($this->updated_at) >= 1) {
        // Refill hearts (you could add logic for actual heart management here)
        // $this->current_streak = 0; // Reset current streak (as per your logic)
        $this->current_hearts = 5;
        $this->save();

        // }
    }

    public function following()
    {
        return $this->belongsToMany(Learner::class, 'learner_follows', 'follower_id', 'followed_id')
            ->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(Learner::class, 'learner_follows', 'followed_id', 'follower_id')
            ->withTimestamps();
    }
}
