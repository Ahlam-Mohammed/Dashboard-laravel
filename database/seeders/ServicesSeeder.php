<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title'       => 'Book anytime',
            'description' => 'You can order anytime, and your order will be safe even though it is far from the order date',
            'icon'        => 'ticket-discount.svg',
            'is_active'   => 1
        ]);
    }
}
