<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                "name" => "Tag 1"
            ],
            [
                "name" => "Tag 2"
            ],
            [
                "name" => "Tag 3"
            ],
            [
                "name" => "Tag 4"
            ],
            [
                "name" => "Tag 5"
            ]
        ];

        for($i=0; $i<sizeof($tags); $i++){
            $new_tag = new Tag();
            $new_tag->name = $tags[$i]["name"];
            $new_tag->save();
        }
    }
}
