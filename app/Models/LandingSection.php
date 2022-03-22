<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class LandingSection extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'landing_sections';
    protected $guarded = [];
}
