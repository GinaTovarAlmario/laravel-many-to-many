<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $techsNames = [
           'HTML',
           'CSS',
           'JS',
           'Vue',
           'PHP',
        ];
    }
}
