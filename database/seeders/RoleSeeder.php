<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Admin;
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
        $Manager = Role::create(['guard_name' => 'admin', 'name' => 'Manager']);
        $Admin = Role::create(['guard_name' => 'admin', 'name' => 'Admin']);
        $User = Role::create(['name'=>'User']);

        //! Manager permissions and some admin
        $permission = Permission::create(['guard_name'=>'admin', 'name'=>'criar user'])->syncRoles(['Manager']); //*(inclui parte de definir como adm ou comum)
        $permission = Permission::create(['guard_name'=>'admin', 'name'=>'edit homepage'])->syncRoles(['Manager']);

        $permission = Permission::create(['guard_name'=>'admin', 'name'=>'edit user'])->syncRoles([$Manager, $Admin]);
        $permission = Permission::create(['guard_name'=>'admin', 'name'=>'apagar user'])->syncRoles([$Manager, $Admin]);

        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'criar post'])->syncRoles([$Manager, $Admin]);
        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'apagar post'])->syncRoles([$Manager, $Admin]);
        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'edit post'])->syncRoles([$Manager, $Admin]);

        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'criar email'])->syncRoles([$Manager, $Admin]);
        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'apagar email'])->syncRoles([$Manager, $Admin]);
        $permission = Permission::create(['guard_name' => 'admin', 'name' => 'responder email'])->syncRoles([$Manager, $Admin]);


        //!user comum $permission = Permissions
        $permissionUser = Permission::create(['guard_name' => 'web', 'name' => 'criar post'])->syncRoles(['User']);
        $permissionUser = Permission::create(['guard_name' => 'web', 'name' => 'edit post'])->syncRoles(['User']);
        $permissionUser = Permission::create(['guard_name' => 'web', 'name' => 'apagar post'])->syncRoles(['User']);

        $permissionUser = Permission::create(['guard_name' => 'web', 'name' => 'criar email'])->syncRoles(['User']);
        $permissionUser = Permission::create(['guard_name' => 'web', 'name' => 'apagar email '])->syncRoles(['User']);
        $permissionUser = Permission::create(['guard_name' => 'web', 'name' => 'responder email'])->syncRoles(['User']);

        $permissionUser = Permission::create(['guard_name' => 'web', 'name' => 'edit user'])->syncRoles(['User']);

    
    }
}
