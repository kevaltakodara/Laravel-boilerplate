<?php

namespace App\Http\Controllers;

use App\Models\EmployeeTimeSheetDetail;
use Illuminate\Http\Request;

class EmployeeTimeSheetController extends Controller
{
    public function index(){
        return view('backend.employee.index');
    }

    public function details($employee_time_sheet_id){
        $id = $employee_time_sheet_id;
        $details = EmployeeTimeSheetDetail::where('employee_time_sheet_id', $id)->get();
        
        return view('backend.employee.details', compact('details'))->render();
    }
}
