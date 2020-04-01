<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\Tournament;
use App\BetOption;
use App\BetsForMatch;
use App\BetOptionDetail;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $matches = Match::paginate(20);
        return view("admin.match.index")->with('matches',$matches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tournaments = Tournament::all();
        return view("admin.match.create")->with('tournaments',$tournaments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Match::create($request->all());
        return redirect()->route('match.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $match = Match::find($id);
        $betOptions = BetOption::all();
        $betOptionsSelected = BetsForMatch::where('match_id','=',$id)->get();        
        return view('admin.match.show')->with('match',$match)->with('betOptions',$betOptions)->with('betOptionsSelected',$betOptionsSelected);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function bets(Request $request){
        // dd($request->all());

        $formatch = BetsForMatch::find($request->bets_for_matches_id);
        $option = BetOption::find($formatch->bet_option_id);


        if ($option->isMultipleSupported){
            if(count($request->name) > 1){
                for($i = 0; $i < count($request->name); $i++){
                    if(isset($request->details_id[$i])){
                        $details = BetOptionDetail::find($request->details_id[$i]);
                        $details->name = $request->name[$i];
                        $details->value = $request->value[$i];
                        $details->update();
                    }else{
                        $details = new BetOptionDetail();
                        $details->name = $request->name[$i];
                        $details->bets_for_match_id = $request->bets_for_matches_id;
                        $details->value = $request->value[$i];
                        $details->save();
                    }
                }
                return redirect()->back();
            }else {
                $details = new BetOptionDetail();
                $details->name = $request->name;
                $details->bets_for_match_id = $request->bets_for_matches_id;
                $details->value = $request->value;
                $details->save();

                return redirect()->back();
            }
        }else {
            if (isset($request->details_id)){
                $details = BetOptionDetail::find($request->details_id);
                $details->name = $request->value1;
                $details->value = $request->value2;
                $details->update();

                return redirect()->back();
            }else {

            $details = new BetOptionDetail();
            $details->name = $request->value1;
            $details->bets_for_match_id = $request->bets_for_matches_id;
            $details->value = $request->value2;
            $details->save();

            return redirect()->back();

            }
        }
    }
}
