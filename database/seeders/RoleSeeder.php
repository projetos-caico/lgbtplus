<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Roles;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        $admin = Role::create(['name' => 'Admin']);
        $user = Role::create(['name' => 'Usuário comum']);
        $manager = Role::create(['name' => 'Super admin']);

        $permission = Permission::create(['name' => 'Criar_user']);
        $permission = Permission::create(['name' => 'Editar_user']);
        $permission = Permission::create(['name' => 'Apagar_user']);
        $permission = Permission::create(['name' => 'Definir_funcao']);
        //definir a função do user: admin, usuario comum ou outro super admin
        $permission = Permission::create(['name' => 'Criar_noticia']);
        $permission = Permission::create(['name' => 'Editar_noticia']);
        $permission = Permission::create(['name' => 'Apagar_noticia']);
        $permission = Permission::create(['name' => 'Editar_homepage']);
        //a foto que tá no header
        $permission = Permission::create(['name' => 'Editar_glossario']);
        $permission = Permission::create(['name' => 'Editar_manchete']);

        $permission = Permission::create(['name' => 'Ver_email']);
        // $permission = Permission::create(['name' => 'Editar_manchete']);

        $manager->givePermissionTo([
            'Criar_user', 'Editar_user', 'Apagar_user', 'Definir_funcao', 'Criar_noticia', 'Editar_noticia', 'Apagar_noticia', 'Editar_homepage', 'Editar_glossario', 'Editar_manchete', 'Ver_email'
        ]);

        $admin->givePermissionTo([
            'Criar_noticia', 'Editar_noticia', 'Apagar_noticia', 'Editar_homepage', 'Editar_glossario', 'Editar_manchete', 'Ver_email'
        ]);

        $user->givePermissionTo([
            'Criar_noticia', 'Editar_noticia', 'Apagar_noticia'
        ]);


    }
}
