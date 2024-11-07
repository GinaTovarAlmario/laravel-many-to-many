<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //prendo tutti i projects
        $projects = Project::all();

        // prendo tutti i techs
        $technologies = Technology::all()->pluck('id');

        // individuo relazione
        foreach($projects as $project){
            $project->technologies()->attach($faker->randomElements($technologies,3));
        }
    }
}
