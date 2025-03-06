<?php

namespace App\Services\User\Auth;

use App\Models\User;
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
}
