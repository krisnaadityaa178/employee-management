<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'name',
        'email',
        'phone',
        'department',
        'position',
        'salary',
        'hire_date',
        'status'
    ];

    protected $casts = [
        'hire_date' => 'date',
        'salary' => 'decimal:2'
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeCuti($query)
    {
        return $query->where('status', 'cuti');
    }

    public function scopeBerhenti($query)
    {
        return $query->where('status', 'berhenti');
    }
}