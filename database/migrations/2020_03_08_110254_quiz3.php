<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Quiz3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category');
            $table->string('question');
            $table->string('correct_answer');
            $table->string('pembahasan');
            $table->json('incorrect_answers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
