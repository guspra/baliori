<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('item_review')==false) {
            Schema::create('item_review', function (Blueprint $table) {
                $table->integer('item_id')->unsigned();
                $table->integer('customer_id')->unsigned();
                $table->text('description');
                $table->integer('rating');
                $table->timestamps();

                $table->foreign('item_id')
                    ->references('id')
                    ->on('item');
                $table->foreign('customer_id')
                    ->references('user_id')
                    ->on('customer');    
                 
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
        Schema::drop('item_review');
    }
}
