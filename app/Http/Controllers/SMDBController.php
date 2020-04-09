<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SmallBody;

class SMDBController extends Controller
{
    //
    public function index() {
        $smallbodies = \App\SmallBody::all(); //prend tout ce qu'il y a dans le model SmallBody
    	return view('SBdatabase', ['smallbodies' => $smallbodies]);
    }

    public function insert(Request $request) {
        $smallbody = new SmallBody;
        try {
            $smallbody->name = $request->input('name');
            $smallbody->planet = $request->input('planet');
            $smallbody->kind = $request->input('kind');
            $smallbody->distance = $request->input('distance');
            $smallbody->class = $request->input('class');

            $smallbody->save();
            //dd($smallbody);
            $smallbodies = \App\SmallBody::all();
            return view('SBdatabase', ['smallbodies' => $smallbodies]);
        }
        catch(\Exception $e){
            // do task when error
            //echo $e->getMessage();   // insert query
            $smallbodies = \App\SmallBody::all();
            //$smallbody->showDBerror = 'smallbodies-insert failure'; 
            return view('SBdatabase', ['smallbodies' => $smallbodies]);
        }
        
    }

    /*public function update() {
        $smallbody = \App\SmallBody::find(1);
        $smallbody->planet = 'Venus';
        $smallbody->save();
        //dd($smallbody);
    }

    public function delete() {
        $smallbody = \App\SmallBody::find(3);
        $smallbody->delete();
    }*/
}
