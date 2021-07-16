<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Soal2Controller extends Controller
{
    public function index()
    {
        return view('soal2');
    }

    public function texInput(Request $request)
    {
        dd($request->all());  //to check all the datas dumped from the form
        //if your want to get single element,someName in this case
        $someName = $request->someName;
    }
}
