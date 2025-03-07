<?php
namespace App\Services\Project;

use App\Models\UserProject;
use App\Shared\src\Services\ServiceAbstract;

class UserProjectService extends ServiceAbstract
{
    public function __construct(UserProject $model)
    {
        parent::__construct($model);
    }
}
