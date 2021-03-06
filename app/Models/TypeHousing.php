<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class TypeHousing extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'type_housing';
    protected $guarded = [];
}
