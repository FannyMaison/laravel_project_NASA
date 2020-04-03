<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APODController extends Controller
{
    //
    public function index() {
    	//curl insomnia
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		  CURLOPT_HTTPHEADER => array(
		    "demo_key: hmfzhbu2NavdYI2CxfPxFC9zaYcg0tGEsSLJ3rKW"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		//$response = json_decode($response);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}
    	return view('welcome');
    	//return view('welcome', ['response' => json.decode($response)]);
    }

    //return view( view: 'welcome', ['response' => json.decode($response)]);

}
