<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tournament;

class Match extends Model
{
    protected $fillable = [
    	"name",
    	"match_time",
    	"status",
        "unique_id",
    	"team1",
    	"team2",
    	"tournament_id",
        "status"
    ];

    public function tournament(){
    	return $this->belongsTo(Tournament::class);
    }

    public function betsForMatch(){
        return $this->hasMany(BetsForMatch::class);
    }

}
