<?php
namespace App\Services\User;

use App\Models\User;
use App\Shared\src\Services\ServiceAbstract;

class UserService extends ServiceAbstract
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
