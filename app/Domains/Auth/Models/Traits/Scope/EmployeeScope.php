<?php

namespace App\Domains\Auth\Models\Traits\Scope;

trait EmployeeScope
{
    /**
     * @param $query
     * @param $term
     * @return mixed
     */
    public function scopeSearch($query, $term)
    {
        return $query->where(function ($query) use ($term) {
            $query->where('employee_name', 'like', '%'.$term.'%')
                ->orWhere('employer_name', 'like', '%'.$term.'%')
                ->orWhere('pay_period_from', 'like', '%'.$term.'%')
                ->orWhere('pay_period_to', 'like', '%'.$term.'%')
                ->orWhere('pay_date', 'like', '%'.$term.'%');
        });
    }
}