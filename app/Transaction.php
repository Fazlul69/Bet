<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /*
     * Transaction Request will hold
     *
     * 1. user id
     * 2. mobile no
     * 3. transaction id [ could be nullable, in case withdraw]
     * 4. type [ cash in, withdraw ]
     * 5. status [ approved, pending, canceled ]
     */

	protected $fillable = [
		"user_id",
		"mobile",
		"txn_id",
		"type"

	];    
}
