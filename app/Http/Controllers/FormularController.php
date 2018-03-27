<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularController extends Controller
{
    public function formularAuswerten(Request $request)
    {
        $eingabe = $request->eingabe;
        return view('ausgabe', compact('eingabe'));
    }
}
