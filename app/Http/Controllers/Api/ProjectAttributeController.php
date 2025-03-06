<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Project\StoreProjectRequest;
use App\Http\Requests\Api\Project\UpdateProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Services\Project\ProjectAttributeService;
use App\Shared\src\Http\Controllers\Api\ControllerAbstract;

class ProjectAttributeController extends ControllerAbstract
{
    protected string $jsonResourceClass = ProjectResource::class;
    protected string $storeRequestClass = StoreProjectRequest::class;
    protected string $updateRequestClass = UpdateProjectRequest::class;

    public function __construct(ProjectAttributeService $service)
    {
        parent::__construct($service);
    }
}
