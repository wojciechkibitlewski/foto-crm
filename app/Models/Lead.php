<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'note',
        'noteForClient',
        'leadValue',
        'source_id',
        'type_id',
        'executionDate',
        'executionTime',
        'user_id'
    ];

}
