<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Requests\Api\LoginRequest;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Services\Auth\AuthApiService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController
{
    public function __construct(private AuthApiService $authApiService)
    {
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        try {
            $result = $this->authApiService->register($request->validated());
            return ApiResponse::data([
                'user' => new UserResource($result['user']),
                'token' => $result['token'],
            ]);
        } catch (\Exception $e) {
            return ApiResponse::errors($e->getMessage());
        }
    }

    public function login(LoginRequest $request): JsonResponse
    {
        try {
            $result = $this->authApiService->login($request->validated());
            return ApiResponse::data([
                'user' => new UserResource($result['user']),
                'token' => $result['token'],
            ]);
        } catch (\Exception $e) {
            return ApiResponse::errors($e->getMessage());
        }
    }

    public function logout(Request $request): JsonResponse
    {
        try {
            $result = $this->authApiService->login($request->validated());
            return ApiResponse::data([
                'user' => new UserResource($result['user']),
                'token' => $result['token'],
            ]);
        } catch (\Exception $e) {
            return ApiResponse::errors($e->getMessage());
        }
    }

}
