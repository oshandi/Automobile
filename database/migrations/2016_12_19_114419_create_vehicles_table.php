<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image_path');
            $table->string('title');
            $table->string('manufacturer');
            $table->string('model');
            $table->string('country');
            $table->string('fuel');
            $table->string('transmission');
            $table->string('steering');
            $table->string('category');
            $table->string('body_type');
            $table->string('v_condition');
            $table->integer('mileage');
            $table->date('model_year');
            $table->string('drive');     //4WD 2WD
            $table->integer('price');
            $table->string('color');
            $table->integer('seats');
            $table->integer('doors');
            $table->integer('engine');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehicles');
    }
}
