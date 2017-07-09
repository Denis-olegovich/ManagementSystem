<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('positions', function(Blueprint $table){

            $table->increments('id');
            $table->string('name',225);
            $table->string('name_rp',225);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        //DB::statement('drop table positions cascade');
         Schema::drop('users');
         Schema::drop('positions');

    }
}
