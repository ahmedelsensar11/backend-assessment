<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\StoreUserRequest;
use App\Http\Requests\Api\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Services\Project\ProjectService;
use App\Services\User\UserService;
use App\Shared\src\Http\Controllers\Api\ControllerAbstract;

class ProjectController extends ControllerAbstract
{
    protected string $jsonResourceClass = UserResource::class;
    protected string $storeRequestClass = StoreUserRequest::class;
    protected string $updateRequestClass = UpdateUserRequest::class;

    public function __construct(ProjectService $service)
    {
        parent::__construct($service);
    }
}
