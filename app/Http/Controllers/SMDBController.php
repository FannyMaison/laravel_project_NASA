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

    public function indexUpdate() {
        $smallbody = \App\SmallBody::all(); //prend tout ce qu'il y a dans le model SmallBody
        //$smallbody = \App\SmallBody::find(7); //prend tout ce qu'il y a dans le model SmallBody
       return view('SBdatabaseEdit', ['smallbodies' => $smallbody]);
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

    public function update(Request $request, $id) {
        $smallbody = \App\SmallBody::find($id);
        $smallbody->name = $request->input('rename');
        $smallbody->planet = $request->input('replanet');
        $smallbody->kind = $request->input('rekind');
        $smallbody->distance = $request->input('redistance');
        $smallbody->class = $request->input('reclass');
        $smallbody->update();

        //dd($smallbody);
        //$smallbodies = \App\SmallBody::all();
        //return view('SBdatabase', ['smallbodies' => $smallbodies]);
        return redirect()->action('SMDBController@index');
    }

    public function delete($id) {
        $list = \App\SmallBody::find($id);
        $list->delete();
        $smallbodies = \App\SmallBody::all();
        return view('SBdatabase', ['smallbodies' => $smallbodies]);
    }
}
