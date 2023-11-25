<?php

namespace App\Models;

use App\Domains\Auth\Models\Traits\Scope\EmployeeScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeTimeSheet extends Model
{
    use HasFactory, EmployeeScope;

    protected $table = 'employee_time_sheet';

    protected $fillable = [
        'employee_name',
        'employer_name',
        'pay_period_from',
        'pay_period_to',
        'pay_date',
    ];
}
