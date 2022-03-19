<?php

namespace App\Repositories;

use App\Models\CustomerSay;

class CustomerRepository {

    public function getAll()
    {
        return CustomerSay::all();
    }

    public function getCustomerByID($id)
    {
        return CustomerSay::findOrFail($id);
    }

}

