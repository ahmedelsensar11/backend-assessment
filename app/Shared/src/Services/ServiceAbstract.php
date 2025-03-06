<?php

namespace App\Shared\src\Services;

use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\QueryBuilder;

abstract class ServiceAbstract implements ServiceInterface
{
    protected Model $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function paginate(array $filter = [], array $with = [], array $select = ['*'])
    {
        return QueryBuilder::for($this->model::class)
            ->select($select)
            ->orderByDesc('id')
            ->with($with)
            ->where($filter)
            ->allowedFilters($this->model->getAllowedFilters() ?? ['id', 'name'])
            ->paginate(request()->limit ?? 10)
            ->appends(request()->query());
    }

    public function findOrFail(int $id ,array $filter = [],array $with=[])
    {
        return $this->model->with($with)->where($filter)->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data): bool
    {
        return $this->model->update($data);
    }

    public function delete(): void
    {
        $this->model->delete();
    }
}
