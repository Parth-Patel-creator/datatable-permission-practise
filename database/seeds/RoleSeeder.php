<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
        $permissions=Permission::all();

        $role=Role::create(['name'=>'admin']);
        $role->syncPermissions($permissions);

        $role=Role::create(['name'=>'writer']);
        $role->syncPermissions(['read company','create company','edit company']);

        $role=Role::create(['name'=>'editor']);
        $role->syncPermissions(['read company','edit company']);
    }
}
