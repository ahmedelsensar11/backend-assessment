<?php

namespace App\Shared\src\Services;

interface ServiceInterface
{

    public function paginate(array $filter = [], array $with = [], array $select = ['*']);

    public function findOrFail(int $id , array $filter = [], array $with = []);

    public function create(array $data);

    public function update(array $data):bool;

    public function delete():void;
}
