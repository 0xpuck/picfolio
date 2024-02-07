<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Admin']);
        $admin = Role::create(['name' => 'Sub Admin']);
        $affiliate = Role::create(['name' => 'Affiliate']);
        $partner = Role::create(['name' => 'Partner']);
        $projectManager = Role::create(['name' => 'Project Manager']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
        ]);

        $projectManager->givePermissionTo([
            'edit-user',
        ]);
    }
}
