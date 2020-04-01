<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class PagesController extends Controller
{
    public function index(){
    	$matches = Match::where('status','=','1')->get();
    	return view('welcome')->with('matches',$matches);
    }
}
