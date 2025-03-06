<?php

namespace App\Services\User\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthApiService
{

    /**
     * @throws \Exception
     */
    public function register(array $data) : User
    {
        try {
            DB::beginTransaction();
            $user = User::create($data);
            $user->createToken('auth_token')->accessToken;
            DB::commit();
            return $user;
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
    }
}
