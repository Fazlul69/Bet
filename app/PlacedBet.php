<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlacedBet extends Model
{
    /*
     * To place a bet user request will hold following data.
     * 1. user_id
     * 2. bets_for_match_id
     * 3. amount
     * 4. bet_name
     * 5. bet_value
     */
   protected $fillable = [
   		"bets_for_match_id",
   		"amount",
   		"bet_name",
   		"bet_value"
   ];
}
