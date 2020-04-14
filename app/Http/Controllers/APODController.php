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

		$response1 = curl_exec($curl);
		$err = curl_error($curl);
		$response = json_decode($response1, true);
		


		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  //var_dump($response);
			if (isset($response["copyright"]))
			{
				$copyright = $response["copyright"];
				$breakpoint = strpos($response["copyright"], "Text:");
				if ($breakpoint > 0) {
					$copyright = substr ($response["copyright"],0, $breakpoint);			
				}
			}
			else {
				$copyright = 'no copyright';
			}

			if (isset($response["date"])) {
				$date = $response["date"];
			}
			else {
				$date = 'no date';
			}

			if (isset($response["hdurl"])) {
				$hdurl = $response["hdurl"];
			}
			else {
				$hdurl = 'no image';
			}
			
			if (isset($response["title"])) {
				$title = $response["title"];
			}
			else {
				$title = 'no title';
			}
			
			if (isset($response["explanation"])) {
				$explanation = $response["explanation"];
			}
			else {
				$explanation = 'no explanation';
			}
			
		}
    	//return view('welcome');
    	//return view('welcome', ['response' => json_decode($response1, true)]);
    	return view('welcome', [
    		'copyright' => $copyright,
    		'date' => $date,
    		'title' => $title,
    		'hdurl' => $hdurl,
    		'explanation' => $explanation
    	]);
    }

}
?>