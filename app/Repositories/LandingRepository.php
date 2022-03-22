<?php

namespace App\Repositories;

use App\Models\LandingSection;

class LandingRepository {

    public function get()
    {
        return LandingSection::all();
    }

    public function getByID($id)
    {
        return LandingSection::findOrFail($id);
    }

    public function getIsActive()
    {
        return LandingSection::where('is_active', '=', true)->get();
    }

}

