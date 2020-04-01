<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BetOption;

class BetOptionController extends Controller
{
    public function index(){
    	$options = BetOption::all();
    	return view('admin.bet.index')->with('options',$options);
    }

    public function store(Request $request){
    	$inputs = $request->all();

    	if ( array_key_exists("isMultipleSupported",$inputs)) {
    		$inputs["isMultipleSupported"] = 1;
    	}else {
    		$inputs["isMultipleSupported"] = 0;
    	}

    	BetOption::create($inputs);
    	return redirect()->back()->with("success","New Bet OPtion added");
    }
}
