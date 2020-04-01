<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /*
     * Transaction Request will hold
     *
     * 1. user id
     * 2. mobile no
     * 3. transaction id [ could be nullable, in case withdraw]
     * 4. type [ cash in, withdraw ]
     * 5. status [ approved, pending, canceled ]
     */}
