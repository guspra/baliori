<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('room')==false) {
            Schema::create('room', function (Blueprint $table) {
                $table->integer('item_id')->unsigned();

                $table->foreign('item_id')
                    ->references('id')
                    ->on('item');
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
        Schema::drop('room');
    }
}
