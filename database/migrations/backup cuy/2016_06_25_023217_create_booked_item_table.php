<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookedItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('booked_item')==false) {
            Schema::create('booked_item', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('item_id')->unsigned();
                $table->integer('customer_id')->unsigned();
                $table->integer('payment_id')->unsigned();
                $table->integer('expired_paytime');
                $table->integer('number_of_item');
                $table->timestamps();

                $table->foreign('item_id')
                    ->references('id')
                    ->on('item');
                $table->foreign('customer_id')
                    ->references('user_id')
                    ->on('customer');
                $table->foreign('payment_id')
                    ->references('id')
                    ->on('payment');    
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
        Schema::drop('booked_item');
    }
}
