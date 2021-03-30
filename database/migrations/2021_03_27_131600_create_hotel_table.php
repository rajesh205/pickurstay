<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_hotel', function (Blueprint $table) {
            $table->increments('hotel_id');
            $table->string('hotel_refence_id')->nullable();
            $table->longText('hotel_description')->nullable();
            $table->string('hotel_name')->nullable();
            $table->text('hotel_address')->nullable();
            $table->string('hotel_latituted')->nullable();
            $table->string('hotel_longitude')->nullable();
            $table->integer('hotel_is_active')->nullable();
            $table->string('hotel_contact_person')->nullable();
            $table->string('hotel_contact_number')->nullable();
            $table->integer('hotel_rooms')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('tb_hotel');
    }
}
