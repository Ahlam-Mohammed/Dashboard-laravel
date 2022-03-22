<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(LandingSection::class);
        $this->call(TypeHousing::class);
        $this->call(HousingSeeder::class);
        $this->call(CustomerSeeder::class);
    }
}
