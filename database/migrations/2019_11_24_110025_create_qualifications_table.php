<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('resource_pool_id');
            $table->foreign('resource_pool_id')->references('id')->on('resource_pool');
            $table->unsignedInteger('next_qualification_id')->nullable();
            $table->foreign('next_qualification_id')->references('id')->on('qualifications');
            $table->string('name');
            $table->string('sign');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('qualifications');
    }
}
