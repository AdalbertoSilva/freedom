<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techniques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('difficulty');
            $table->integer('effect');
            $table->integer('form');
            $table->integer('area');
            $table->integer('duration');
            $table->integer('execution');
            $table->integer('restriction');
            $table->text('description');
            $table->timestamp('created_at')->nullable();
            $table->increments('user_id');
			$table->increments('skill_id');
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
        Schema::dropIfExists('techniques');
    }
}
