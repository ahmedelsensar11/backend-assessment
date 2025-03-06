<?php

namespace App\Shared\src\Services;

use Illuminate\Database\Eloquent\Model;

interface ServiceInterface
{

    public function paginate(array $filter = [], array $with = [], array $select = ['*']);

    public function findOrFail(int $id , array $filter = [], array $with = []);

    public function create(array $data);

    public function update(Model $model, array $data);

    public function delete(Model $model);
}
