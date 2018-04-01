<?php

namespace App\Http\Controllers;

use App\Car;
use App\Garage;
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

    // Daten finden und Ausgeben mit Where
    public function datenWhere()
    {
        $car = Car::where('baujahr',0)->first();

        return $car->name;
    }

    // Alle Daten aus der Datenbank ausgeben
    public function datenAll()
    {
        $car = Car::all();

        return $car;
    }


    // Daten löschen, 2 mögliche optionen
    public function datenEntfernen()
    {
        // $car = Car::find(1);
        // $car->delete();

        Car::destroy(2);

        return "eintrag entfernt";

    }

    //Car mit Garage verknüpfen Relationship One to One
    public function datenVerknuepfen()
    {
        $garage = new Garage(['name' => 'Meine Garage']);
        $car = Car::find(1);

        $car->garage()->save($garage);
        return "Auto wurde Garage zugewiesen";
    }

    //Relationship Many To Many
    public function datenManyToMany()
    {
        $garage = new Garage(['name' => 'Meine Garage']);
        $garage->save();

        $car = new Car([
            'name' => 'Mercedes',
            'baujahr' => '2018'
        ]);
        $car->save();

        $garage->cars()->save($garage);

        return "Pivot Tabelle erzeugt";

    }

    public function datenAutoNeueGarage()
    {

        $car = Car::find(1);

        $garage = new Garage(['name' => 'Zweite Garage']);
        $garage->save();

        $garage->cars()->save($car);

        return "Pivot Tabelle erzeugt";

    }

    public function datenErsteGarageZumAuto()
    {

        $car = Car::find(1);
        $garage = $car->garages()->first();

        return $garage->name;

    }
}
