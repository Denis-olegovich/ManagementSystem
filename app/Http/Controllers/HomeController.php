<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Parametr;
use App\Position;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $user = Auth::user();
        $params = Parametr::all();
        $positions = Position::all();

        return view('home')->with(['user'=>$user,
                                   'params'=>$params,
                                   'positions'=>$positions
                                   ]);
    }

    public function add_parameter(Request $request){

        $this->validate($request,[
                 'name' => 'required|max:200',
                 'value' => 'required|max:200'
            ]);
        $date = $request->all();
        $parameter = new Parametr;
        $parameter -> fill($date);
        $parameter -> save();

        return redirect('/home');

    }

    public function delete_parameter(Request $request){

        $parameter_id = $request->parameter_id;
        $parameter_tmp = Parametr::where('id',$parameter_id)->first;
        $parameter_tmp ->delete();
    }

    //public function update_parameter(){

   // }

    public function add_position(Request $request){

        $this->validate($request,[
                 'name' => 'required|max:200',
                 'name_rp' => 'required|max:200'
            ]);
        $date = $request->all();
        dump($date);
        //$position = new Position;
        //$position -> fill($date);
        //$position -> save();

        //return redirect('/home');
    }

    public function delete_position(Request $request){

    }

    public function update_parameter(){

    }



}
