<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthApiService
{

    /**
     * @throws \Exception
     */
    public function register(array $data) : array
    {
        try {
            DB::beginTransaction();
            $user = User::create($data);
            $token = $user->createToken('auth_token')->accessToken;
            DB::commit();
            return [
                'token' => $token,
                'user' => $user,
            ];
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @throws \Exception
     */
    public function login(array $data): array
    {

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            $user = User::where('email', $data['email'])->first();
            $token = $user->createToken('auth_token')->accessToken;
            return [
                'user' => $user,
                'token' => $token
            ];
        }
        throw new \Exception('Invalid credentials');
    }
}
