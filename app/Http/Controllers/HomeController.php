<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Compte;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('welcome', [
            'allExpenceFinancier'=> Compte::sum('solde'),
            'allClients'=> Client::count(),
            'allComptes'=> Compte::count(),
            'allUsers' => User::count()
        ]);
    }
}
