<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_goals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('goal_id');
            $table->foreign('goal_id')->references('id')->on('goals');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('status');
            $table->unsignedInteger('mentor_id');
            $table->foreign('mentor_id')->references('id')->on('users');
            $table->unsignedInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
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
        Schema::dropIfExists('log_goals');
    }
}
