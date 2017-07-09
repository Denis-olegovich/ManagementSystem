<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->integer('position_id')->unsigned()->
                                            nullable()->
                                            change();
            $table->index('position_id');
            $table->foreign('position_id')->references('id')->
                                            on('positions')->
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

       Schema::table('users', function (Blueprint $table) {
        $table->dropForeign('users_position_id_foreign');
        $table->dropColumn('position_id');
    });
       // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        //Schema::drop('position_id');
        //Schema::drop('users');       
       // DB::statement('SET FOREIGN_KEY_CHECKS = 1');


    }
}
