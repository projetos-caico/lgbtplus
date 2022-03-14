<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\admin;
use App\Models\User;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = Role::create(['guard_name' => 'admin', 'name' => 'manager']);
        $admin = Role::create(['guard_name' => 'admin', 'name' => 'admin']);
        $user = Role::create(['name'=>'user']);

        //! manager permissions and some admin
        $permission = Permission::create(['guard_name'=>'admin', 'name'=>'criar user'])->syncRoles(['manager']); //*(inclui parte de definir como adm ou comum)
        $permission = Permission::create(['guard_name'=>'admin', 'name'=>'edit homepage'])->syncRoles(['manager']);

        $permission = Permission::create(['guard_name'=>'admin', 'name'=>'edit user'])->syncRoles([$manager, $admin]);
        $permission = Permission::create(['guard_name'=>'admin', 'name'=>'apagar user'])->syncRoles([$manager, $admin]);

        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'criar post'])->syncRoles([$manager, $admin]);
        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'apagar post'])->syncRoles([$manager, $admin]);
        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'edit post'])->syncRoles([$manager, $admin]);

        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'criar email'])->syncRoles([$manager, $admin]);
        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'apagar email'])->syncRoles([$manager, $admin]);
        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'responder email'])->syncRoles([$manager, $admin]);


        //!user comum $permission = Permissions
        $permissionuser = Permission::create(['guard_name' => 'web', 'name' => 'criar post'])->syncRoles(['user']);
        $permissionuser = Permission::create(['guard_name' => 'web', 'name' => 'edit post'])->syncRoles(['user']);
        $permissionuser = Permission::create(['guard_name' => 'web', 'name' => 'apagar post'])->syncRoles(['user']);

        $permissionuser = Permission::create(['guard_name' => 'web', 'name' => 'criar email'])->syncRoles(['user']);
        $permissionuser = Permission::create(['guard_name' => 'web', 'name' => 'apagar email '])->syncRoles(['user']);
        $permissionuser = Permission::create(['guard_name' => 'web', 'name' => 'responder email'])->syncRoles(['user']);

        $permissionUser = Permission::create(['guard_name' => 'web', 'name' => 'edit user'])->syncRoles(['user']);

        

        // $User1 = \App\Models\User::factory()->create([
        //     'name' => 'Nat user',
        //     'email' => 'nat@user.com',
        // ]);
        // $User1->assignRole($User);

        // $User2 = \App\Models\admin::factory()->create([
        //     'name' => 'Nat admin',
        //     'email' => 'nat@admin.com',
        // ]);
        // $User2->assignRole($manager);

    }
}
