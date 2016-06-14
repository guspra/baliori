<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('item')==false) {
            Schema::create('item', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('partner_id')->unsigned();
                $table->string('name', 255);
                $table->integer('stock');
                $table->integer('price');
                $table->text('address');
                $table->string('latitude', 100);
                $table->string('longitude', 100);
                $table->text('note');
                $table->timestamps();
                $table->foreign('partner_id')
                    ->references('user_id')
                    ->on('partner');
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
        Schema::drop('item');
    }
}
