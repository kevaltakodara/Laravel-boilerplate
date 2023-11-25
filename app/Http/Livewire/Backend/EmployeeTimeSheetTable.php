<?php

namespace App\Http\Livewire\Backend;

use App\Domains\Auth\Models\User;
use App\Models\EmployeeTimeSheet;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

/**
 * Class UsersTable.
 */
class EmployeeTimeSheetTable extends DataTableComponent
{
    /**
     * @var
     */
    public $status;


    /**
     * @return Builder
     */
    public function query(): Builder
    {
        // $query = User::with('roles', 'twoFactorAuth')->withCount('twoFactorAuth');
        $query = new EmployeeTimeSheet();
        return $query
            ->when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('Employee Name'))
                ->sortable(),
            Column::make(__('Employer Name'))
                ->sortable(),
            Column::make(__('Pay Period From')),
            Column::make(__('Pay Period To')),
            Column::make(__('Pay Date')),
            Column::make(__('Created At')),
            Column::make(__('Actions'))
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.employee.includes.row';
    }
}
