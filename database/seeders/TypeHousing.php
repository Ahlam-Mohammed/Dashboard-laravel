<?php

namespace Database\Seeders;

use App\Models\TypeHousing as Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeHousing extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(
        [
            'name' => 'Apartment',
        ]);

        Type::create(
        [
            'name' => 'Home',
        ]);
    }
}
