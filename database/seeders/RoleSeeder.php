<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Yaroslav',
            'email' => 'kyv07@yandex.ru',
            'password' => Hash::make('123456'),
             'role' => 'moderator' 
        ]);
        User::create([
            'name' => 'Yaroslav',
            'email' => 'reader@yandex.ru',
            'password' => Hash::make('123456'),
             'role' => 'reader'
        ]);
    }
}