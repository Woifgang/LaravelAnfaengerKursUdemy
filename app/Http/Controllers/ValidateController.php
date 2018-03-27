<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public function inputValidate(Request $request)
    {
        $this->validate(
            $request,
            [
                'username' => 'bail|required|min:3|max:32',  //unique:users
                'email' => 'required|email'
            ]
            );
        return "bestanden";
    }
}
