<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('requests',function(Blueprint $table){

            $table->increments('id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('comment',225)->nullable();
            $table->enum('status',array('ожидает утверждения', 
                                        'отказано',
                                        'подтверждена'))->default('ожидает утверждения');
            $table->integer('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->
                                        on('users')->
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
        //Schema::table('requests', function (Blueprint $table) {
       // $table->dropForeign('requests_user_id_foreign');
   // });
        Schema::drop('requests');
    }
}
