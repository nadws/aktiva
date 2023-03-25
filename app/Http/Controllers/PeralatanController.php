<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeralatanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Peralatan'
        ];
        return view('peralatan.peralatan',$data);
    }

    public function create(Request $r)
    {
        dd($r->all());
    }
}
