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
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'member']);

        $permissions = [
            'manage-users',
            'manage-books',
            'manage-categories',
            'view-loans',
            'confirm-returns',
            'view-dashboard',
            'download-reports',
            'send-notifications',
            'view-books',
            'search-books',
            'borrow-books',
            'view-loan-history',
            'return-books',
            'update-profile',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign permissions to roles
        $adminRole->givePermissionTo($permissions);
        $userRole->givePermissionTo([
            'view-books',
            'search-books',
            'borrow-books',
            'view-loan-history',
            'return-books',
            'update-profile',
        ]);
    }

}