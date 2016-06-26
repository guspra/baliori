<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('partner_type')==false) {
            Schema::create('partner_type', function (Blueprint $table) {
                $table->integer('partner_id')->unsigned();
                $table->string('type', 255);
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
        Schema::drop('partner_type');
    }
}
