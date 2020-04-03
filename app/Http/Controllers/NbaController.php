<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NbaController extends Controller
{
    public function index(){
    	//curl insomnia
    }

    return view( view: 'welcome', ['response' => json.decode($response)]);
}
