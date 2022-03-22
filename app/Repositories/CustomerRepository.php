<?php

namespace App\Repositories;

use App\Models\CustomerSay;

class CustomerRepository {

    public function getAll()
    {
        return CustomerSay::where('is_active',1)->first();
    }

    public function getCustomerByID($id)
    {
        return CustomerSay::findOrFail($id);
    }

    public function getIsActive()
    {
        return CustomerSay::where('is_active', '=', true)->get();
    }

}

