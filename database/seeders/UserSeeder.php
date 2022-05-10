<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@app.com',
            'username' => 'superadmin',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'level_admin' => 0,
        ]);
    }
}
