<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $techsNames = [
           'HTML',
           'CSS',
           'JS',
           'Vue',
           'PHP',
        ];
        foreach($techsNames as $techName){
            $newTech = new Technology();
            $newTech->name = $techName;
            $newTech->color = $faker->unique()->hexColor();
            $newTech->save();
        }
    }
}
