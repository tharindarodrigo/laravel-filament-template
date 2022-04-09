<?php

namespace Database\Seeders;

use App\Helpers\Permission;
use App\Helpers\Role as HelpersRole;
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
            HelpersRole::SUPER_ADMIN,
            HelpersRole::ADMIN,
            HelpersRole::MODERATOR,
            HelpersRole::USER,
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
