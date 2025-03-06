<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Project\StoreProjectAttributeRequest;
use App\Http\Requests\Api\Project\UpdateProjectAttributeRequest;
use App\Http\Resources\ProjectAttributeResource;
use App\Services\Project\ProjectAttributeService;
use App\Shared\src\Http\Controllers\Api\ControllerAbstract;

class ProjectAttributeController extends ControllerAbstract
{
    protected string $jsonResourceClass = ProjectAttributeResource::class;
    protected string $storeRequestClass = StoreProjectAttributeRequest::class;
    protected string $updateRequestClass = UpdateProjectAttributeRequest::class;

    public function __construct(ProjectAttributeService $service)
    {
        parent::__construct($service);
    }
}
