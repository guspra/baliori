<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('partner')==false) {
            Schema::create('partner', function (Blueprint $table) {
                $table->integer('user_id')->unsigned();
                $table->string('address', 255);
                $table->string('religion', 64);
                $table->string('bank_account', 64);
                $table->string('id_card_number', 64);
                $table->timestamps();
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
        Schema::drop('partner');
    }
}
