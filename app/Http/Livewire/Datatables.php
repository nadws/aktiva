<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Datatables extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public 
    $data,
    $nama,
    $search,
    $showPage = 10,
    $thead = [];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function simpan()
    {
        DB::table('users')->insert([
            'name' => $this->nama,
            'email' => "$this->nama@gmail.com",
            'password' => bcrypt(1),
        ]);
        $this->emit('hideModal');
        $this->dispatchBrowserEvent('table-updated');
    }

    public function render()
    {
        return view('livewire.datatables',[
            'db' => DB::table('users')
                        ->where('name', 'like', '%'.$this->search.'%')
                        ->paginate($this->showPage)
        ]);
    }
}
