<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'active', 'company_id', 'employee_id' 
    ];

    public function companies()
    {
        return $this->belongsTo(Company::class);
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
