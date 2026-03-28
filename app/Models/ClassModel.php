<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'name',
        'medium',
        'shift',
        'stream',
        'sections',
        'include_semesters'
    ];

    protected $casts = [
        'sections' => 'array',
        'include_semesters' => 'boolean',
    ];
}
