<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function learner()
    {
        return $this->hasOne(Learner::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    // public function following(): BelongsToMany
    // {
    //     return $this->belongsToMany(User::class, 'follows', 'follower_id', 'followed_id')
    //         ->withTimestamps();
    // }

    // public function followers(): BelongsToMany
    // {
    //     return $this->belongsToMany(User::class, 'follows', 'followed_id', 'follower_id')
    //                 ->withTimestamps();
    // }

    // app/Models/User.php

    public function following(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'follower_id',
            'followed_id'
        );
    }

    /**
     * Users who are following the current user.
     */
    public function followers(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'followed_id',
            'follower_id'
        )->using(Follow::class)->withTimestamps();
    }
}
