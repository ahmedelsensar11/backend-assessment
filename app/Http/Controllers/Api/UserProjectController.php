<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Project\StoreUserProjectRequest;
use App\Http\Resources\UserProjectResource;
use App\Services\Project\UserProjectService;
use App\Shared\src\Http\Controllers\Api\ControllerAbstract;

class UserProjectController extends ControllerAbstract
{
    protected string $jsonResourceClass = UserProjectResource::class;
    protected string $storeRequestClass = StoreUserProjectRequest::class;
    protected string $updateRequestClass = StoreUserProjectRequest::class;

    public function __construct(UserProjectService $service)
    {
        parent::__construct($service);
    }
}
