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
        User::factory()->create([
            'name' => 'author1',
            'email' => 'company@gmail.com',
            'password' => Hash::make('123'), // Hash kata sandi
            'role' => 'author',
        ]);
    }
}