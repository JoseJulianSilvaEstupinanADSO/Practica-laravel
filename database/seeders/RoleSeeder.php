<?php

namespace Database\Seeders;

use Hamcrest\Description;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Correr migraciones de las seeders
     */
    public function run(): void
    {
        // Roles a utilizar
        $super = Role::create(['name' => 'SuperAdmin']);
        $organizador = Role::create(['name' => 'Organizacion']);
        $estudiante = Role::create(['name' => 'Estudiante']);
        $visitante = Role::create(['name' => 'Visitante']);

        // Permisos del Super administrador para usuarios
        Permission::create([
            'name' => 'users.index',
            'description' => 'Listar usuarios'
        ])->syncRoles([$super]);
        Permission::create([
            'name' => 'users.edit',
            'description' => 'Editar usuarios'
        ])->syncRoles([$super]);
        Permission::create([
            'name' => 'users.destroy',
            'description' => 'Eliminar usuarios'
        ])->syncRoles([$super]);

        // Permisos del super administrador para roles
        Permission::create([
            'name' => 'roles.index',
            'description' => 'Listar roles'
        ])->syncRoles([$super]);
        Permission::create([
            'name' => 'roles.create',
            'description' => 'Crear roles'
        ])->syncRoles([$super]);
        Permission::create([
            'name' => 'roles.edit',
            'description' => 'Editar roles'
        ])->syncRoles([$super]);
        Permission::create([
            'name' => 'roles.destroy',
            'description' => 'Eliminar roles'
        ])->syncRoles([$super]);

        // Permisos del super administrador para permisos
        Permission::create([
            'name' => 'permissions.index',
            'description' => 'Listar permisos'
        ])->syncRoles([$super]);
        Permission::create([
            'name' => 'permissions.create',
            'description' => 'Crear permisos'
        ])->syncRoles($super);
        Permission::create([
            'name' => 'permissions.edit',
            'description' => 'Editar permisos'
        ])->syncRoles([$super]);
        Permission::create([
            'name' => 'permissions.destroy',
            'description' => 'Eliminar permisos'
        ])->syncRoles($super);

        // Permisos del super administrador para cursos
        Permission::create([
            'name' => 'cursos.index',
            'description' => 'Listar cursos'
        ])->syncRoles([$super, $visitante, $estudiante]);

        // Permisos para, superadmin, visitante, estudiante y organizador
        Permission::create([
            'name' => 'plans.index',
            'description' => 'Listar planes'
        ])->syncRoles($super, $visitante, $estudiante, $organizador);
        Permission::create([
            'name' => 'plans.create',
            'description' => 'Crear planes'
        ])->syncRoles([$super, $organizador]);
        Permission::create([
            'name' => 'plans.edit',
            'description' => 'Editar planes'
        ])->syncRoles([$super, $organizador]);
        Permission::create([
            'name' => 'plans.destroy',
            'description' => 'Eliminar planes'
        ])->syncRoles([$super, $organizador]);
    }
}
