<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Peralatan extends Component
{
    public $model;

    public function render()
    {
        $data = [
            'user' => $this->model
        ];
        return view('livewire.peralatan',$data);
    }
}
