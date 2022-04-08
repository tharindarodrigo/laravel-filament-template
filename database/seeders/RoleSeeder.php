<?php

namespace Database\Seeders;

use App\Helpers\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            Permission::SUPER_ADMIN,
            Permission::ADMIN,
            Permission::MODERATOR,
            Permission::USER,
        ];

        $userRoles = [];

        foreach ($roles as $role) {
            $userRole = [
                'name' => $role,
                'guard_name' => 'web'
            ];

            Role::firstOrCreate($userRole);

        }
    }
}
