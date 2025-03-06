<?php
namespace App\Services\Project;

use App\Models\Project;
use App\Shared\src\Services\ServiceAbstract;

class ProjectService extends ServiceAbstract
{
    public function __construct(Project $model)
    {
        parent::__construct($model);
    }
}
