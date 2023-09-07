<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "admin",
            "email" => "admin@laracamp",
            "email_verified_at" => now(),
            "password" => bcrypt("admin"),
            "is_admin" =>true
        ]);
    }
}
