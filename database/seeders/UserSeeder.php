<?php

namespace Database\Seeders;

use App\Helpers\Permission;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@superadmin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        $superAdmin->assignRole(Permission::SUPER_ADMIN);

        $superAdmin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        $superAdmin->assignRole(Permission::ADMIN);
    }
}
