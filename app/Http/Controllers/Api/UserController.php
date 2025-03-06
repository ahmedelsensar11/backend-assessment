<?php

namespace App\Http\Controllers\Api;

use App\Services\User\UserService;
use App\Shared\src\Http\Controllers\Api\ControllerAbstract;

class UserController extends ControllerAbstract
{
    public function __construct(UserService $service)
    {
        parent::__construct($service);
    }
}
