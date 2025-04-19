<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Str;
Use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            [
                'id'=>1,
                'name' => 'Ad Ministrator',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Password1'),
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
            ],
        ];

        User::insertOrUpdate($users);

    }
}
