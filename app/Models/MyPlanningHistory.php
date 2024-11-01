<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MyPlanningHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'old_production_plan',
        'new_production_plan',
        'modified_at',
    ];
}
