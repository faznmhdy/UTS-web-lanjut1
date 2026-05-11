<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_name',
        'address',
        'phone',
        'description'
    ];

    public function internships()
    {
        return $this->hasMany(Internship::class);
    }
}