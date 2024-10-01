<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHeartsColumnToLearnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('learners', function (Blueprint $table) {
            $table->integer('hearts')->default(value: 5); // Adding the hearts column with a default value of 0
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('learners', function (Blueprint $table) {
            $table->dropColumn('hearts'); // Dropping the hearts column if rolled back
        });
    }
}
