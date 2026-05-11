<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $fillable = [
        'company_id',
        'title',
        'description',
        'quota',
        'location',
        'start_date',
        'end_date'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}