<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//lien vers le modèle
use App\Car;

class CarsController extends Controller
{
    //
    public function index() {
    	$cars = \App\Car::all();
    	dd($cars);
    	

    	return view('welcome', ['cars' => $cars]);
    }

    public function insert(Request $request) {
    	//dd($request);
    	$car = new Car;
    	$car->brand = $request->input('Renault');
    	$car->model = 'Clio';
    	$car->color = 'Rouge';
    	$car->price = 16000;
    	//$car->save();
    }

    public function update() {
    	$car = \App\Car::find(1);
    	$car->color = 'Bleue';
    	$car->save();
    	//dd($car);
    }

    public function delete() {
    	$car = \App\Car::find(3);
    	$car->delete();
    }
}
*/