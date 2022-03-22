<?php

namespace Database\Seeders;

use App\Models\Housing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Housing::create([
            'name'       => 'Container Apartment',
            'type'       => 'Apartment',
            'location'   => 'London, United Kingdom',
            'price'      => 220,
            'period'     => 'Per Week',
            'is_active'  => true,
            'image'        => 'mp3.png'
        ]);

        Housing::create([
            'name'       => 'Mera Apartment',
            'type'       => 'Apartment',
            'location'   => 'London, United Kingdom',
            'price'      => 240,
            'period'     => 'Per Week',
            'is_active'  => true,
            'image'        => 'mp1.png'
        ]);

        Housing::create([
            'name'       => 'Sun Apartment',
            'type'       => 'Apartment',
            'location'   => 'London, United Kingdom',
            'price'      => 180,
            'period'     => 'Per Week',
            'is_active'  => true,
            'image'        => 'mp2.png'
        ]);
    }
}
