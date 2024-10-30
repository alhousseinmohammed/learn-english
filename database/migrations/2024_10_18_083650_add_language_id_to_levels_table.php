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
        Schema::table('levels', function (Blueprint $table) {
            $table->unsignedBigInteger('language_id')->after('name')->nullable();

            // Add the foreign key constraint
            $table->foreign('language_id')->references('id')->on('languages')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('levels', function (Blueprint $table) {
            $table->dropForeign(['language_id']); // Drop the foreign key first
            $table->dropColumn('language_id'); // Then drop the column
        });
    }
};
