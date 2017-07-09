<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ParamsSeeder::class);
    }
}
class UsersTableSeeder extends Seeder
{

	public function run(){

		DB::table('users')->delete();

		$users=[
              [
                   'name'=>'Первененко Денис Олегович',
                   'name_rp'=>'Первененко Дениса Олеговича',
                   'address'=>'г.Витебск',
                   'email'=>'pervenenko.den@mail.ru',
                   'password'=>bcrypt('1111'),
                   'role'=>'руководитель',
                   'created_at'=>'2017-07-05 22:44:49',
                   'updated_at'=>'2017-07-05 22:44:49' 
              	]
			];
		DB::table('users')->insert($users);
	}

 
}