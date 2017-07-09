<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',225);
            $table->string('name_rp',225);
            $table->string('address',225);
            $table->string('email',80);
            $table->unique('email');
            $table->string('password');
            $table->enum('role',array('руководитель', 
                                      'сотрудник'))->default('сотрудник');
            $table->enum('isblocked',array('активный', 
                                           'заблокированный'))->default('активный');
            $table->rememberToken();
            $table->timestamps();           
            
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
    });
        Schema::dropIfExists('users');
    }
}
