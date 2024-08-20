<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'Html',
            'css',
            'Bootstrap',
            'JS',
            'Vue',
            'PHP',
            'mySQL',
            'Laravel',
        ];

        foreach ($technologies as $technology){
            Technology::create([
                'name' => $technology
            ]);
        }
    }
}
