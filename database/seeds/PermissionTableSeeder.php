<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create New Role'
            ],
            [
                'name' => 'role-read',
                'display_name' => 'Display Role Listing',
                'description' => 'See only listing of Role'
            ],
            [
                'name' => 'role-update',
                'display_name' => 'Update Role',
                'description' => 'Update Role'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Edit Role',
                'description' => 'Edit Role'
            ],
            [
                'name' => 'wartawan-create',
                'display_name' => 'Create Wartawan',
                'description' => 'Create New Wartawan'
            ],
            [
                'name' => 'wartawan-read',
                'display_name' => 'Read Wartawan',
                'description' => 'See only listing of Wartawan'
            ],
            [
                'name' => 'wartawan-update',
                'display_name' => 'Update Wartawan',
                'description' => 'Update Wartawan'
            ],
            [
                'name' => 'wartawan-delete',
                'display_name' => 'Delete Wartawan',
                'description' => 'Delete Wartawan'
            ],
            [
                'name' => 'wartawan-edit',
                'display_name' => 'Edit Wartawan',
                'description' => 'Edit Wartawan'
            ],
        ];

        foreach ($permission as $key=>$value)
        {
            Permission::create($value);
        }
    }
}
