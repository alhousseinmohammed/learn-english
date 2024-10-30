<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearnerFollowsTable extends Migration
{
    public function up()
    {
        Schema::create('learner_follows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('follower_id')->constrained('learners')->cascadeOnDelete();
            $table->foreignId('followed_id')->constrained('learners')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['follower_id', 'followed_id']); // Prevent duplicate follows
        });
    }

    public function down()
    {
        Schema::dropIfExists('learner_follows');
    }
}
