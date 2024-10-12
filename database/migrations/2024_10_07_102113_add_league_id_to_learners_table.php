<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::table('learners', function (Blueprint $table) {
        $table->unsignedBigInteger('league_id')->nullable(); // Adding the new column
        $table->foreign('league_id')->references('id')->on('leagues')->onDelete('set null'); // Foreign key constraint
    });
}

public function down()
{
    Schema::table('learners', function (Blueprint $table) {
        $table->dropForeign(['league_id']); // Drop the foreign key
        $table->dropColumn('league_id'); // Remove the column
    });
}

};
