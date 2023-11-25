<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\EmployeeTimeSheetController;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });

Route::get('/employee/time-sheet', [EmployeeTimeSheetController::class, 'index'])
    ->name('employee.timesheet.list')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });

Route::get('/employee/time-sheet/details/{employee_time_sheet_id}', [EmployeeTimeSheetController::class, 'details'])
    ->name('employee.timesheet.details')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });