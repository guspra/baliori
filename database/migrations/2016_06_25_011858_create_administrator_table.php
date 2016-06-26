<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('administrator')==false) {
            Schema::create('administrator', function (Blueprint $table) {
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
        Schema::drop('administrator');
    }
}
