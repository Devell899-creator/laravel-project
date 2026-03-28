<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'medium',
        'name',
        'type',
        'subject_code',
        'bg_color',
        'image'
    ];
}
