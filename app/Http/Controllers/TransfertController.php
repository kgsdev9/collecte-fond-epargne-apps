<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class TransfertController extends Controller
{
    public function __invoke()
    {
        return view('transfert.liste', [
        ]);
    }
}
