<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $faker = Faker::create();
        $types = [
            'front-end',
            'back-end',
            'full-stack',
        ];

        foreach ($types as $type) {
            Type::create([
                'name' => $type
            ]);
        }
    }
}
