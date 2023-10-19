<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\Occasion;
use App\Models\Place;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Occasion::factory(8)
            ->has(Event::factory(rand(2,4))
                ->has(Place::factory(rand(15, 25)))
            )->create();
    }
}
