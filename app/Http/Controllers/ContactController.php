<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
    	return view('contact');
    }

    public function send(Request $request) {
    	/*dd($request->input('name'));*/
    	$name = $request->input('name');
    	$email = $request->input('name');

		/*dd($name $email);*/
		return view('contact_ok', ['name' => $name]);
    }
}
