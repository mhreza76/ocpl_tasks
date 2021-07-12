<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicFormController extends Controller
{
    public function add() {
       return view('admin.add-form');
    }

    public function store(Request $request) {
        dd($request->all());

        // validaition


        // business logic


        // db store


        // return with success or error message


        return view('admin.add-form');
    }
}
