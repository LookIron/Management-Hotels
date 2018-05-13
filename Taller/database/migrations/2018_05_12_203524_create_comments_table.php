<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->integer('rating');
            $table->integer('hotel_id')->unsigned();
            $table->integer('userHotel_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->foreign('userHotel_id')->references('id')->on('user_hotes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
