<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('car')==false) {
            Schema::create('car', function (Blueprint $table) {
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
        Schema::drop('car');
    }
}
