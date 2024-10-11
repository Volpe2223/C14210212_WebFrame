<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event_Categories;

class CategoryEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event_Categories::create([
            'name' => 'Expo',
            'active' => 1,
        ]);

        Event_Categories::create([
            'name' => 'Concert',
            'active' => 1,
        ]);

        Event_Categories::create([
            'name' => 'Conference',
            'active' => 1,
        ]);

    }
}
