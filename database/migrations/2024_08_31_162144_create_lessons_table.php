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
        Schema::create('lessons', function (Blueprint $table) {
    $table->id();
    $table->foreignId('theme_id')->constrained()->onDelete('cascade'); // Links to themes table
    $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade'); // Links to admins table
    $table->string('title');
    $table->text('content'); // Lesson content
    $table->integer('order');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
