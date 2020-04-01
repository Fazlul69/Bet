<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BetOption;
use App\BetOptionDetail;
use App\Match;

class BetsForMatch extends Model
{
	protected $fillable = [
		"match_id",
		"bet_option_id"
	];
    public function betOption(){
    	return $this->belongsTo(BetOption::class);
    }

    public function match(){
    	return $this->belongsTo(Match::class);
    }

    public function betDetails(){
    	return $this->hasMany(BetOptionDetail::class);
    }
}
