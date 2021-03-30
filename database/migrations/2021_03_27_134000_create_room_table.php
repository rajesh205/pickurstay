<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_hotel_room', function (Blueprint $table) {
            $table->increments('hotel_room_id');
            $table->string('hotel_type')->nullable();
            $table->string('hotel_category')->nullable();
            $table->string('price')->nullable();
            $table->integer('no_persons')->nullable();
            $table->integer('hotel_id');
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
        Schema::dropIfExists('tb_hotel_room');
    }
}
