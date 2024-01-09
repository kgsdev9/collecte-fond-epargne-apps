<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientConroller extends Controller
{
    public function __invoke()
    {
        return view('clients.liste');
    }
}
