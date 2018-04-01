<?php

namespace App\Http\Controllers;

use App\Mail\WillkommensMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    //komplette Funktionen nur mit verfügbar wenn login erfolgreich war
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userDatenAusgeben()
    {
        $user = Auth::user();

        return $user->name;
    }

    public function emailVersenden()
    {
        Mail::to('swag@swag.de')->send(new WillkommensMail());
        return "E-Mail versendet!";
    }

}
