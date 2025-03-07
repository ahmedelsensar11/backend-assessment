<?php
namespace App\Services\Project;

use App\Models\Project;
use App\Shared\src\Services\ServiceAbstract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProjectService extends ServiceAbstract
{
    public function __construct(Project $model)
    {
        parent::__construct($model);
    }

    /**
     * @throws \Exception
     */
    public function create(array $data)
    {
        try {
            DB::beginTransaction();
            $project = $this->model->create(['name' => $data['name'], 'status' => $data['status']]);
            if (isset($data['attributes'])) { //when you need to store attributes
                $project->projectAttributes()->sync($data['attributes']);
            }
            DB::commit();
            return $project;
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
    }


    public function update(Model $model, array $data): bool
    {
        try {
            DB::beginTransaction();
            $model->update(['name' => $data['name'], 'status' => $data['status']]);
            if (isset($data['attributes'])) { //check if need to update attributes
                $model->projectAttributes()->sync($data['attributes']);
            }
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
    }
}
