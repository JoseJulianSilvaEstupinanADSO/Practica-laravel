<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $super = Role::create(['name' => 'SuperAdmin']);
        $organizador = Role::create(['name' => 'Organizacion']);
        $admin = Role::create(['name' => 'Administrador']);
        $instructor = Role::create(['name' => 'Instructor']);
        $estudiante = Role::create(['name' => 'Estudiante']);

        Permission::create([
            'name'        => 'users.index',
            'description' => 'Listar usuarios'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'users.edit',
            'description' => 'Editar usuarios'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'roles.index',
            'description' => 'Listar roles'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'roles.create',
            'description' => 'Crear roles'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'roles.edit',
            'description' => 'Editar roles'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'roles.destroy',
            'description' => 'Eliminar roles'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'permissions.index',
            'description' => 'Listar Permisos'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'permissions.create',
            'description' => 'Crear permisos'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'permissions.edit',
            'description' => 'Editar permisos'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'permissions.destroy',
            'description' => 'Eliminar permisos'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'cursos.index',
            'description' => 'Listar cursos'
          ])->syncRoles([$admin, $estudiante]);
        Permission::create([
            'name'        => 'cursos.edit',
            'description' => 'Editar Cursos'
          ])->syncRoles([$admin, $organizador]);
        Permission::create([
            'name'        => 'cursos.create',
            'description' => 'Crear curso'
          ])->syncRoles([$admin,$organizador]);
        Permission::create([
            'name'        => 'cursos.destroy',
            'description' => 'Eliminar curso'
          ])->syncRoles([$admin, $organizador]);
        Permission::create([
            'name'        => 'facturas.index',
            'description' => 'Listar facturas'
          ])->syncRoles([$admin, $estudiante]);
        Permission::create([
            'name'        => 'organizations.index',
            'description' => 'Listar organizations'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'organizations.create',
            'description' => 'Crear organizations'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'organizations.edit',
            'description' => 'Editar organizations'
          ])->syncRoles([$admin, $organizador]);
        Permission::create([
            'name'        => 'plans.create',
            'description' => 'Crear plan'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'plans.edit',
            'description' => 'Editar plan'
          ])->syncRoles([$admin]);
        Permission::create([
            'name'        => 'plans.index',
            'description' => 'Listar planes'
          ])->syncRoles([$admin]);

    }
}
