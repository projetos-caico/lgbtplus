<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\User;
use App\Models\Admin;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = \App\Models\User::factory()->create([
            'name' => 'NATALIA USER',
            'email' => 'natalia@user.com',
            'password' => bcrypt('natalia123')
        ]);
        $user1->assignRole('User');
    
        $user2 = \App\Models\Admin::factory()->create([
            'name' => 'NATALIA MANAGER',
            'email' => 'natalia@manager.com',
            'password' => bcrypt('natalia123')
        ]);
        $user2->assignRole('Manager');
    
        $user2 = \App\Models\Admin::factory()->create([
            'name' => 'NATALIA ADM',
            'email' => 'natalia@adm.com',
            'password' => bcrypt('natalia123')
        ]);
        $user2->assignRole('Admin');
    }
}
