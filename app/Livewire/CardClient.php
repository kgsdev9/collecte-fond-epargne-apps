<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class CardClient extends Component
{
    public function render()
    {
        return view('livewire.card-client', [
            'allClients' => Client::orderingLatest()->paginate(30)
        ]);
    }
}
