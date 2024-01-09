<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
     public function __invoke()
     {
        return view('compte.liste');
     }
}
