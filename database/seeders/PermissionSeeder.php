<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $classes = [
            'user',
            'permission'
        ];

        $permissions = [
            'view-all',
            'view',
            'create',
            'update',
            'delete',
            // 'restore',
            // 'force-delete'
        ];

        foreach ($classes as $class) {
            foreach ($permissions as $permission) {
                $classPermission = [
                    'name' => $class . '.' . $permission,
                    'guard_name' => 'web'
                ];

                Permission::firstOrCreate($classPermission);
            }
        }
    }
}
