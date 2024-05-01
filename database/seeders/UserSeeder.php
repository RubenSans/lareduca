<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);       

        DB::table('users')->insert([
            'name' => 'Teacher',
            'role' => 'teacher',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('teacher123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Student',
            'role' => 'student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('student123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // for ($i = 1; $i <= 5; $i++) {
        //     DB::table('users')->insert([
        //         'name' => 'User ' . $i,
        //         'role' => 'student',
        //         'email' => 'user' . $i . '@gmail.com',
        //         'password' => bcrypt('user123'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]);
        // }
    }
}
