<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects = [
            [
                "name" => "laravelComics",
                "date" => "31-10-2024",
                "description" => "Progetto su Laravel incentrato sulle CRUD",
                "link" => "https://github.com/AngeloCrisci/laravel-dc-comics",
            ],
            [
                "name" => "phpOOP2",
                "date" => "05-10-2024",
                "description" => "Progetto su plain PHP icentrato sulle OOP",
                "link" => "https://github.com/AngeloCrisci/php-oop-2",
            ],
            [
                "name" => "project vuejs",
                "date" => "08-09-2024",
                "description" => "Progetto di gruppo sull'implementazione JS con Framework VUE",
                "link" => "https://github.com/AngeloCrisci/proj-html-vuejs",
            ],
        ];

        foreach ($projects as $project){
            $newProject = new Project();
            $newProject->name = $project["name"];
            $newProject->date = $project["date"];
            $newProject->description = $project["description"];
            $newProject->link = $project["link"];
            $newProject->save();
        }
    }
}
