<?php

namespace App\Repositories;

use App\Models\Service;

class ServiceRepository {

    public function getAll()
    {
        return Service::all();
    }

    public function getServiceByID($id)
    {
        return Service::findOrFail($id);
    }

}

