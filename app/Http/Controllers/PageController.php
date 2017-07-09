<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Parametr;

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
        $params = Parametr::where('id','<',3)->get();
        dump($params);

       // foreach ($params as $parametr) {
        	# code...
        //	echo $parametr->name.'<br />';
       // }
    	return view('page');
    }
}
