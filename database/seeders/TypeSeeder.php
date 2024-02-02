<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Front-end and Back-end',
                'description' => 'front-end + back-end',
            ],
            [
                'name' => 'Front-End',
                'description' => 'Front-end exercise',
            ],
            [
                'name' => 'Back-End',
                'description' => 'Back-end exercise',
            ]
        ];

        foreach ($types as $type) {
            $newCategory = new Type();
            $newCategory->fill($type);
            $newCategory->save();
        }
    }
    }

