<?php

namespace App\Repositories;

use App\Models\TypeHousing;

class TypeHousingRepository {

    public function getAll()
    {
        return TypeHousing::all();
    }

    public function getTypeByID($id)
    {
        return TypeHousing::findOrFail($id);
    }

}

