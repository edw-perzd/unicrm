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
        $role1 = Role::create(['name' => 'Admin']);

        Permission::create(['name' => 'admin.alumnos.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.alumnos.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.alumnos.destroy'])->assignRole($role1);
        Permission::create(['name' => 'admin.alumnos.edit'])->assignRole($role1);
    }
}
