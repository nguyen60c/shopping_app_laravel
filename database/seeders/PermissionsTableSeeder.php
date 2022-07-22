<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = new Collection([
            [
                'id'    => 1,
                'name' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'name' => 'permission_create',
            ],
            [
                'id'    => 3,
                'name' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'name' => 'permission_show',
            ],
            [
                'id'    => 5,
                'name' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'name' => 'permission_access',
            ],
            [
                'id'    => 7,
                'name' => 'role_create',
            ],
            [
                'id'    => 8,
                'name' => 'role_edit',
            ],
            [
                'id'    => 9,
                'name' => 'role_show',
            ],
            [
                'id'    => 10,
                'name' => 'role_delete',
            ],
            [
                'id'    => 11,
                'name' => 'role_access',
            ],
            [
                'id'    => 12,
                'name' => 'user_create',
            ],
            [
                'id'    => 13,
                'name' => 'user_edit',
            ],
            [
                'id'    => 14,
                'name' => 'user_show',
            ],
            [
                'id'    => 15,
                'name' => 'user_delete',
            ],
            [
                'id'    => 16,
                'name' => 'user_access',
            ],
            [
                'id'    => 17,
                'name' => 'product_management_access',
            ],
            [
                'id'    => 18,
                'name' => 'product_category_create',
            ],
            [
                'id'    => 19,
                'name' => 'product_category_edit',
            ],
            [
                'id'    => 20,
                'name' => 'product_category_show',
            ],
            [
                'id'    => 21,
                'name' => 'product_category_delete',
            ],
            [
                'id'    => 22,
                'name' => 'product_category_access',
            ],
            [
                'id'    => 23,
                'name' => 'product_tag_create',
            ],
            [
                'id'    => 24,
                'name' => 'product_tag_edit',
            ],
            [
                'id'    => 25,
                'name' => 'product_tag_show',
            ],
            [
                'id'    => 26,
                'name' => 'product_tag_delete',
            ],
            [
                'id'    => 27,
                'name' => 'product_tag_access',
            ],
            [
                'id'    => 28,
                'name' => 'product_create',
            ],
            [
                'id'    => 29,
                'name' => 'product_edit',
            ],
            [
                'id'    => 30,
                'name' => 'product_show',
            ],
            [
                'id'    => 31,
                'name' => 'product_delete',
            ],
            [
                'id'    => 32,
                'name' => 'product_access',
            ],
            [
                'id'    => 33,
                'name' => 'profile_password_edit',
            ],
        ]);
        $permissions->map(function ($item) {
            Permission::create(['name' => $item['name']]);
        });
    }
}
