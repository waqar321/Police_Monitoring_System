<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rank;

class OperatorController extends Controller{

	public function login(Request $request){

		if($request->isMethod('post')){
			// echo "post"; die;
			$data = $request->all();
			dd($data);

		}
		// $ranks = rank::all()->where('id', '>', 3);
		// $ranks = rank::all()->take(5);
		// $ranks = rank::all();
		$ranks = rank::all()->where('id','>', 1)->where('id','<', 6);

		


		 // (gender = 'Male' and age >= 18)
		// echo "<pre>";
		// print_r($ranks);
		// echo "</pre>"; die;
		// return view('registeration.registeration');
		return view('registeration.registeration')->with(compact('ranks'));
	}   
}
