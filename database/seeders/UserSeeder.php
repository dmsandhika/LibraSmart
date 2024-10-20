<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'XGQpV@example.com',
            'password' => Hash::make('password'),
        ]);
        $role = Role::findByName('admin');
        $user->assignRole('admin');
        $user->syncPermissions($role->permissions);

        $writer = User::create([
            'name' => 'Member',
            'email' => 'abcV@example.com',
            'password' => Hash::make('password'),
        ]);

        $writer->assignRole('Member');
        $member = Role::findByName('member');
        $writer->syncPermissions($member->permissions);
    }
}