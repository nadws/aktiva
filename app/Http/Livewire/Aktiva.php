<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Aktiva extends Component
{


    public function render()
    {
        $data = [
            'aktiva' => DB::table('users')->get()
        ];
        return view('livewire.aktiva', $data);
    }
}
