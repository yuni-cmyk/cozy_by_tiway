<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'mutia',
                'email' => 'yourrr05babyyy@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => '2025-06-29 15:39:33',
                'updated_at' => '2025-06-29 15:39:33',
            ],
            [
                'name' => 'brayen',
                'email' => 'akucakelumer@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => '2025-07-01 12:05:13',
                'updated_at' => '2025-07-01 12:05:13',
            ],
            [
                'name' => 'SICANTIK',
                'email' => 'damaradama6@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => '2025-07-04 05:48:58',
                'updated_at' => '2025-07-04 05:48:58',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
} 