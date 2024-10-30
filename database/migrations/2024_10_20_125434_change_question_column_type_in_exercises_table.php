<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeQuestionColumnTypeInExercisesTable extends Migration
{
    public function up()
    {
        Schema::table('exercises', function (Blueprint $table) {
            $table->json('question')->change();
        });
    }

    public function down()
    {
        Schema::table('exercises', function (Blueprint $table) {
            $table->longText('question')->change();
        });
    }
}
