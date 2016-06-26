<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('bank_account')==false) {
            Schema::create('bank_account', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->string('bank', 255);
                $table->string('account_number', 255);
                $table->timestamps();    
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
        Schema::drop('bank_account');
    }
}
