<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BetOption;

class BetOptionDetail extends Model
{
    public function betOption(){
    	return $this->belongsTo(BetOption::class);
    }
}
