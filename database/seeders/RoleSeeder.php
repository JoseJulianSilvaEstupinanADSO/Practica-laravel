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
        $instructor = Role::create(['name' => 'Instructo']);
        $studiante = Role::create(['name' => 'Estudiante']);
    }
}
