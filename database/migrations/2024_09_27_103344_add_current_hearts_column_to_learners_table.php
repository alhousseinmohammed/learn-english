<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('learners', function (Blueprint $table) {
            $table->integer('current_hearts')->default(5); // Adding the current_hearts column with a default value of 0
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('learners', function (Blueprint $table) {
            $table->dropColumn('current_hearts'); // Dropping the current_hearts column if rolled back
        });
    }
};
