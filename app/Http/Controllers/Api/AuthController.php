<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Services\User\Auth\AuthApiService;
use Illuminate\Http\JsonResponse;
use Khaleds\Shared\Helpers\ApiResponse;

class AuthController
{
    public function __construct(private AuthApiService $authApiService)
    {
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        try {
            $user = $this->authApiService->register($request->validated());
            return ApiResponse::data(new UserResource($user));
        } catch (\Exception $e) {
            return ApiResponse::errors($e->getMessage(), $e->getCode());
        }
    }

}
