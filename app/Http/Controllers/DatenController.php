<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class DatenController extends Controller
{
    // Daten manuell eintragen
    public function daten()
    {
        $car = new Car();
        $car->name = "Porsche 911";
        $car->baujahr = 1988;
        $car->save();

        return "Erfolg";
    }

    // Daten über Formular eintragen
    public function datenFormular(Request $request)
    {
        $cars = new Car;
        $cars->name = $request->name;
        $cars->baujahr = $request->baujahr;
        $cars->save();

        return "Daten gespeichert";
    }

    // Daten finden über ID
    public function datenFinden()
    {
        $car = Car::find(3);

        return $car->name;
    }

    // Daten finden über ID und manuell ändern;
    // Sollen Daten über Formular geändert werden dan wird Request benötigt
    public function datenUpdate()
    {
        $car = Car::find(3);
        $car->name = "BMW X1";
        $car->save();
        return "auto update durchgeführt" . $car->name;
    }
}
