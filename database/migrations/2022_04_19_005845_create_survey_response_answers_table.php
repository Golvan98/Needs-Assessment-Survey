<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_response_answers', function (Blueprint $table) {
            $table->id();
            $table->char('answer'); 
            $table->unsignedBigInteger('survey_response_id');
            $table->unsignedBigInteger('survey_question_id');
            $table->timestamps();

            $table->foreign('survey_response_id')
            ->references('id')
            ->on('survey_responses')
            ->onDelete('cascade');

            $table->foreign('survey_question_id')
            ->references('id')
            ->on('survey_questions')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_response_answers');
    }
};
