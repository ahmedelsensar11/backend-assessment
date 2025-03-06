<?php

namespace App\Shared\src\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Shared\src\Services\ServiceInterface;
use Illuminate\Http\Request;


abstract class ControllerAbstract
{
    protected string $jsonResourceClass;
    protected string $storeRequestClass;
    protected string $updateRequestClass;

    protected array $filter = [];
    protected array $with = [];
    protected array $select = ['*'];

    public function __construct(protected ServiceInterface $service)
    {
    }

    public function index(Request $request): \Illuminate\Http\JsonResponse
    {
        return ApiResponse::data($this->jsonResourceClass::collection($this->service->paginate($this->filter, $this->with, $this->select)));
    }

    public function show(int $id): \Illuminate\Http\JsonResponse
    {
        return ApiResponse::data($this->jsonResourceClass::make($this->service->findOrFail($id, $this->filter, $this->with)));
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $request = app($this->storeRequestClass);

        return ApiResponse::data($this->jsonResourceClass::make($this->service->create($request->validated())));
    }

    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $request = app($this->updateRequestClass);

        $model = $this->service->findOrFail($id, $this->filter);

        $this->service->update($model, $request->validated());

        return ApiResponse::data($this->jsonResourceClass::make($model->refresh()),ApiResponse::UPDATED);
    }

    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $model = $this->service->findOrFail($id, $this->filter);
        $this->service->delete($model);

        return ApiResponse::success(ApiResponse::DELETED);
    }
}
