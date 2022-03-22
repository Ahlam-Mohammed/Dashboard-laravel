<?php

namespace App\Repositories;

use App\Models\Housing;

class HousingRepository {

    public function getAll()
    {
        return Housing::all();
    }

    public function getHousingByID($id)
    {
        return Housing::findOrFail($id);
    }

    public function getIsActive()
    {
        return Housing::where('is_active', '=', true)->get();
    }

}

