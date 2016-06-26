<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('customer')==false) {
            Schema::create('customer', function (Blueprint $table) {
                $table->integer('user_id')->unsigned();

                $table->foreign('user_id')
                    ->references('id')
                    ->on('user');
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
        Schema::drop('customer');
    }
}
