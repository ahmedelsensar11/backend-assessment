<?php

namespace App\Shared\src\Services;

use Illuminate\Database\Eloquent\Model;

abstract class ServiceAbstract implements ServiceInterface
{
    public function __construct(protected Model $repository)
    {
    }


    public function paginate(array $filter = [], array $with = [], array $select = ['*']){

        return $this->repository->getAllBy($filter, $with, $select);

    }


    public function findOrFail(int $id ,array $filter = [],array $with=[]){

        return $this->repository->findOrFail($id , $filter,['*'],$with);

    }

    public function create(array $data){

        // check for exception
        return $this->repository->create($data);
    }


    public function update(array $data,Model $model){

        return $this->repository->update($model,$data);

    }

    public function delete(Model|string $model){

        $this->repository->delete($model);
    }

    //delete from table where condition
    public function deleteWhereConditions(array $filter = []){

        $this->repository->deleteWhereConditions($filter);
    }


    public function deleteBulk(array $ids,array $filter){

        foreach ($ids as $id) {

            $model = $this->repository->findOrFail($id,$filter ,['id']);

            $this->repository->delete($model);

        }

    }

}
