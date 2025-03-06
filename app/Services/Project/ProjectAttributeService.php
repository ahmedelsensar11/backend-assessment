<?php
namespace App\Services\Project;

use App\Models\ProjectAttribute;
use App\Shared\src\Services\ServiceAbstract;

class ProjectAttributeService extends ServiceAbstract
{
    public function __construct(ProjectAttribute $model)
    {
        parent::__construct($model);
    }
}
