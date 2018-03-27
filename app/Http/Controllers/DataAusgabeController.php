<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataAusgabeController extends Controller
{
    public function standartwert()
    {
        $standartWert = 'Ich bin ein Standartwert';
        $test  = 'Test';
        $testArray[] = array(
            'Datum' => 20180301,
            'Name' => "Woifgang"
        );
        $testArray[] = array(
            'Datum' => 20180201,
            'Name' => "Woifgang1"
        );
        $testArray[] = array(
            'Datum' => 20180101,
            'Name' => "Woifgang2"
        );

        return view('ausgabe' , compact('standartWert', 'test', 'testArray'));
    }
}
