<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Timesheet\StoreTimesheetRequest;
use App\Http\Requests\Api\Timesheet\UpdateTimesheetRequest;
use App\Http\Resources\TimesheetResource;
use App\Services\Timesheet\TimesheetService;
use App\Shared\src\Http\Controllers\Api\ControllerAbstract;

class TimesheetController extends ControllerAbstract
{
    protected string $jsonResourceClass = TimesheetResource::class;
    protected string $storeRequestClass = StoreTimesheetRequest::class;
    protected string $updateRequestClass = UpdateTimesheetRequest::class;

    public function __construct(TimesheetService $service)
    {
        parent::__construct($service);
    }
}
