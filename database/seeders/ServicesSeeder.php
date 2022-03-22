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
            'icon'        => 'tag.svg',
            'is_active'   => true
        ]);

        Service::create([
            'title'       => 'Lots of discounts',
            'description' => "The more you order, the cheaper the discount. the more you don't have to worry about running out of money while traveling",
            'icon'        => 'discount.svg',
            'is_active'   => true
        ]);

        Service::create([
            'title'       => 'Book anytime',
            'description' => "Secure payment, you don't have to worry. Because your every order is always guaranteed",
            'icon'        => 'tick.svg',
            'is_active'   => true
        ]);
    }
}
