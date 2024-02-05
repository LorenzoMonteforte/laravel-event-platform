<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                "name" => "Evento 1",
                "description" => "Descrizione dell'evento 1",
                "city" => "Citta 1",
                "date" => "2024-02-05"
            ],
            [
                "name" => "Evento 2",
                "description" => "Descrizione dell'evento 2",
                "city" => "Citta 2",
                "date" => "2024-02-06"
            ],
            [
                "name" => "Evento 3",
                "description" => "Descrizione dell'evento 3",
                "city" => "Citta 3",
                "date" => "2024-02-07"
            ],
        ];

        for($i=0; $i<sizeof($events); $i++){
            $new_event = new Event();
            $new_event->name = $events[$i]["name"];
            $new_event->description = $events[$i]["description"];
            $new_event->city = $events[$i]["city"];
            $new_event->date = $events[$i]["date"];
            $new_event->save();
        }
    }
}
