<?php

namespace Database\Seeders;

use App\Models\LandingSection as Landing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandingSection extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Landing::create(
            [
                'title'      => 'Let’s find your Paradise',
                'sub_title'  => 'Find your favorite place to live',
                'background' => 'defult-landing.png',
                'is_active'  => true
            ]
            );
    }
}
