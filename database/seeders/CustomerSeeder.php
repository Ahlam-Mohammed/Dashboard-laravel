<?php

namespace Database\Seeders;

use App\Models\CustomerSay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerSay::create(
        [
            'comment'   => 'I get the best service everywhere I go. Vind makes it easy for me to get the best service.',
            'is_active' => true
        ]);
    }
}
