<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){

        return view('form');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|max:35'
        ]);

    }
}
