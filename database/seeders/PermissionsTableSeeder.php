<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'inventory_access',
            ],
            [
                'id'    => 20,
                'title' => 'product_create',
            ],
            [
                'id'    => 21,
                'title' => 'product_edit',
            ],
            [
                'id'    => 22,
                'title' => 'product_show',
            ],
            [
                'id'    => 23,
                'title' => 'product_delete',
            ],
            [
                'id'    => 24,
                'title' => 'product_access',
            ],
            [
                'id'    => 25,
                'title' => 'unit_create',
            ],
            [
                'id'    => 26,
                'title' => 'unit_edit',
            ],
            [
                'id'    => 27,
                'title' => 'unit_show',
            ],
            [
                'id'    => 28,
                'title' => 'unit_delete',
            ],
            [
                'id'    => 29,
                'title' => 'unit_access',
            ],
            [
                'id'    => 30,
                'title' => 'variation_create',
            ],
            [
                'id'    => 31,
                'title' => 'variation_edit',
            ],
            [
                'id'    => 32,
                'title' => 'variation_show',
            ],
            [
                'id'    => 33,
                'title' => 'variation_delete',
            ],
            [
                'id'    => 34,
                'title' => 'variation_access',
            ],
            [
                'id'    => 35,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 36,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 37,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 38,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 39,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 40,
                'title' => 'brand_create',
            ],
            [
                'id'    => 41,
                'title' => 'brand_edit',
            ],
            [
                'id'    => 42,
                'title' => 'brand_show',
            ],
            [
                'id'    => 43,
                'title' => 'brand_delete',
            ],
            [
                'id'    => 44,
                'title' => 'brand_access',
            ],
            [
                'id'    => 45,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
