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
        Schema::create('exercises', function (Blueprint $table) {
    $table->id();
    $table->foreignId('lesson_id')->constrained()->onDelete('cascade'); // Links to lessons table
    $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade'); // Links to admins table
    $table->string('type'); // Exercise type, e.g., 'multiple_choice', 'fill_in_the_blank'
    $table->text('question'); // Exercise question or prompt
    $table->text('image')->nullable();
    $table->text('voice')->nullable();
    $table->json('options')->nullable();
    $table->text('answer'); // Correct answer(s)
    $table->integer('order');
    $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
