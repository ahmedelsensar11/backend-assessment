<?php
namespace App\Services\Timesheet;

use App\Models\Timesheet;
use App\Shared\src\Services\ServiceAbstract;

class TimesheetService extends ServiceAbstract
{
    public function __construct(Timesheet $model)
    {
        parent::__construct($model);
    }
}
