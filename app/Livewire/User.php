<?php

namespace App\Livewire;
use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{

    public $search = '';

    public function render()
    {
        return view('livewire.user', [
           'users' => ModelsUser::where('name', 'like', '%'.$this->search.'%')->get()
        ]);
    }
}
