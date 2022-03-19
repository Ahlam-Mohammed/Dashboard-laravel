<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'services';
    protected $guarded = [];

    protected $fillable = [
        'title', 'description','icon','is_active', 'is_deleted'
    ];
}
