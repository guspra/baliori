<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderedItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('ordered_item')==false) {
            Schema::create('ordered_item', function (Blueprint $table) {
                $table->integer('order_id')->unsigned();
                $table->integer('item_id')->unsigned();
                $table->date('begin_rent_date');
                $table->date('end_rent_date');
                $table->integer('quantity');
                $table->integer('subt_total_price');
                $table->timestamps();

                $table->foreign('order_id')
                    ->references('id')
                    ->on('order');
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
        Schema::drop('ordered_item');
    }
}
