<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserModelSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::where(['email' => 'test@astudio.com'])->first();
        if (!$user) {
            // for test credentials
            User::factory()->create([
                'first_name' => 'Test',
                'last_name' => 'User',
                'email' => 'test@astudio.com',
                'password' => bcrypt('Test@123'),
            ]);
        }

        //other users data
        User::factory(3)->create();
    }
}
