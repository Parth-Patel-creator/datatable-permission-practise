<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[
            [
                'name'=>'edit company'
            ],
            [
                'name'=>'create company'
            ],
            [
                'name'=>'delete company'
            ],
            [
                'name'=>'read company'
            ]
        ];

        foreach($permissions as $permission)
        {
            Permission::create(['name'=>$permission['name']]);
        }
    }
}
