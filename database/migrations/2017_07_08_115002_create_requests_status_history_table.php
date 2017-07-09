<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsStatusHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('request_status_history',function(Blueprint $table){

            $table->increments('id');
            $table->string('new_status');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->
                                        on('users')->
                                        onDelete('cascade')->
                                        onUpdate('cascade');
            $table->index('request_id');
            $table->integer('request_id')->unsigned();
            $table->foreign('request_id')->references('id')->
                                           on('requests')->
                                           onDelete('cascade')->
                                           onUpdate('cascade');


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
       // Schema::table('request_status_history', function (Blueprint $table) {
       // $table->dropForeign('request_status_history_user_id_foreign');
    //});
        Schema::drop('request_status_history');
    }
}
