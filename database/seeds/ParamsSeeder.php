<?php

use Illuminate\Database\Seeder;
use App\Parametr;

class ParamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
     
     DB::table('params')->delete();

    $params=[['name'=>'Название организации','value'=>'ООО “Дженерал Софт”'],
             ['name'=>'ФИО Директора','value'=>'Первененко Денис Олегович'],
             ['name'=>'максимальная длительность отпуска','value'=>'32'],
             ['name'=>'минимальная длительность отпуска','value'=>'24']];
    DB::table('params')->insert($params);
  
    }
}
