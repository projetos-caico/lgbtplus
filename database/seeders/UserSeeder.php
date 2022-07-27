<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\RoleSeeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'nat s admin',
            'last_name' => 'alves',
            'email'=>'nat@sa.com',
            'password'=>bcrypt('natalia123'),
        ])->assignRole('Super admin');
    }
}
