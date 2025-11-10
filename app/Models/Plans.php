<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;

    protected $table = 'plans';

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'capital',
        'duration',
        'roi',
        'time_left',
        'min',
        'max',
        'image',
        'agent_pay',
    ];
}
