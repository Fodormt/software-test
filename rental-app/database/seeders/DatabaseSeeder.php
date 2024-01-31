<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CarSeeder;
use Database\Seeders\ReservationSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'a@a.hu',
        //     'is_admin' => true,
        //     'is_premium' => true,
        // ]);

        $this->call([
            CarSeeder::class,
            ReservationSeeder::class,
            SearchSeeder::class,
        ]);
    }
}
