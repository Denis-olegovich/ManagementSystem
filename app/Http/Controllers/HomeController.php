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

    public function postParameter(Request $request){

        //dump($request); 

        $this->validate($request,['name' => 'required|max:200',
                                  'value' => 'required|max:200'
                                  ]);

        $date = $request->all();
        $parameter = new Parametr;
        $parameter -> fill($date);
        $parameter -> save();

        return redirect('/home');
    }

    public function deleteParameter(Request $request){

        //dump($request);

        $parameter_id = $request->parameter_id;
        $parameter_tmp = Parametr::where('id',$parameter_id);
        $parameter_tmp ->delete();

        return redirect('/home');
    }

    public function postParameter_update(Request $request){

        dump($request);




    }

    public function postPosition(Request $request){

        //dump($request);  

        $this->validate($request,[
                 'name' => 'max:200',
                 'name_rp' => 'max:200'
            ]);

        $date = $request->all();
        $position = new Position;
        $position -> fill($date);
        $position -> save();

        return redirect('/home');
    }

    public function deletePosition(Request $request){
        
        //dump($request);

        $position_id = $request->position_id;
        $position_tmp = Position::where('id',$position_id);
        $position_tmp->delete();

        return redirect('/home');
    }

    public function postPosition_update(Request $request){

        dump($request);

    }



}
