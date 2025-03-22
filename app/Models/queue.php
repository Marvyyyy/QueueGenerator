<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class queue extends Model
{
    use HasFactory;
    protected $table ='dto_queue';
    protected $fillable = [
        'id',
        'number',
        'vehicleType',
        'category',
        'coordinator',
        'date',
        'created_at',
    ];
}
