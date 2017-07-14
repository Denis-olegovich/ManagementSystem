<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Parametr;
use App\User;
use App\Position;

class PageController extends Controller
{
    //
    public function page(){

       //DB::insert("Insert into `params` (`name`,`value`)Values(?,?)",['text1','text2']);
       //$resul = DB::connection()->getPdo()->lastInsertId();
    	//$result = DB::update("Update `params` Set `value`=? Where `id` =?",["text6",5]);
       //$params = DB::select("select * From `params` ");
       //DB::delete("Delete From `params` where `id`=? ",[5]);

      // dump($result);
       //dump($params);
       // $params = Parametr::where('id','<',3)->get();
        //dump($params);

      $params = Parametr::select('name','value')->where('id','<','3')->get();
          //$parametr = Parametr::where('id','<',3)->get();
    //  foreach ($parametr as $key) {
       // echo $key -> name.'<br />';
      //}

      /*$parametr= new Parametr;
      $parametr->name='Text1';
      $parametr->value='Text2';
      $parametr->save();*/ //сохранение
      //$parametr=Parametr::find(5);
     // $parametr->name='Text12';
     // $parametr->value='Text22';
     // $parametr->save();
     // dump($parametr); пересохранение
    	return view('page')->with(['params'=>$params]);
    }
}
