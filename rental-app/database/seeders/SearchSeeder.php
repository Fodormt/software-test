<?php

namespace Database\Seeders;

use App\Models\Search;
use Database\Factories\SearchFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Search::factory(5)->create();
    }
}
