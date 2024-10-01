<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('progress', function (Blueprint $table) {
    $table->id();
    $table->foreignId('learner_id')->constrained('learners')->onDelete('cascade'); // Links to learners table
    $table->foreignId('lesson_id')->constrained('lessons')->onDelete('cascade'); // Links to lessons table
    $table->foreignId('exercise_id')->nullable()->constrained('exercises')->onDelete('cascade'); // Links to exercises table, nullable if tracking lesson completion only
    $table->integer('score')->nullable(); // Stores the score for the exercise, if applicable
    $table->boolean('completed')->default(false); // Indicates whether the lesson or exercise is completed
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress');
    }
};
