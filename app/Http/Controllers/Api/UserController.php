<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;
use App\Services\User\UserService;
use App\Shared\src\Http\Controllers\Api\ControllerAbstract;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserController extends ControllerAbstract
{
    protected string $jsonResourceClass = UserResource::class;

    public function __construct(UserService $service)
    {
        parent::__construct($service);
    }
}
