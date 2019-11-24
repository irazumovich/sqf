<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsForQualificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals_for_qualification', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('qualification_id');
            $table->foreign('qualification_id')->references('id')->on('qualifications');
            $table->unsignedInteger('goal_id');
            $table->foreign('goal_id')->references('id')->on('goals');
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
        Schema::dropIfExists('goals_for_qualification');
    }
}
