<?php

namespace App\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class TransactionComponent extends Component
{
    public function render()
    {
        return view('livewire.transaction-component', [
            'allTransactions'=> Transaction::all()
        ]);
    }
}
