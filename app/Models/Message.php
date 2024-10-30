<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['sender_id', 'receiver_id', 'content'];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id'); // Adjust if your User model is in a different namespace
    }
}
