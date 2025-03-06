<?php

namespace App\Shared\src\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Shared\src\Services\ServiceInterface;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Request;


abstract class ControllerAbstract
{
    protected ResourceCollection $jsonResourceClass;
    protected FormRequest $storeRequestClass;
    protected FormRequest $updateRequestClass;


    protected array $filter = [];
    protected array $with = [];
    protected array $select = ['*'];

    public function __construct(protected ServiceInterface $service)
    {
    }
    public function index(Request $request)
    {
        return ApiResponse::data($this->jsonResourceClass::collection($this->service->paginate($this->filter, $this->with, $this->select)));
    }

    public function show(int $id)
    {
        return ApiResponse::data($this->jsonResourceClass::make($this->service->findOrFail($id, $this->filter, $this->with)));
    }

    public function store(Request $request)
    {
        $request = app($this->storeRequestClass);

        return ApiResponse::data($this->jsonResourceClass::make($this->service->create($request->validated())));
    }

    public function update(Request $request, $id)
    {

        $request = app($this->updateRequestClass);

        $model = $this->service->findOrFail($id, $this->filter);

        $this->service->update($request->validated(), $model);

        return ApiResponse::data($this->jsonResourceClass::make($model->refresh()),ApiResponse::UPDATED);
    }

    public function destroy($id)
    {

        $model = $this->service->findOrFail($id, $this->filter);

        $this->service->delete($model);

        return ApiResponse::success(ApiResponse::DELETED);
    }
}
