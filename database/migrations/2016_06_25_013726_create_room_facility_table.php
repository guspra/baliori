<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('room_facility')==false) {
            Schema::create('room_facility', function (Blueprint $table) {
                $table->integer('room_id')->unsigned();
                $table->integer('facility_id')->unsigned();


                $table->foreign('room_id')
                    ->references('item_id')
                    ->on('room');
                $table->foreign('facility_id')
                    ->references('id')
                    ->on('facility');    
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('room_facility');
    }
}
