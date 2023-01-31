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
                'title' => 'country_create',
            ],
            [
                'id'    => 20,
                'title' => 'country_edit',
            ],
            [
                'id'    => 21,
                'title' => 'country_show',
            ],
            [
                'id'    => 22,
                'title' => 'country_delete',
            ],
            [
                'id'    => 23,
                'title' => 'country_access',
            ],
            [
                'id'    => 24,
                'title' => 'option_access',
            ],
            [
                'id'    => 25,
                'title' => 'industry_create',
            ],
            [
                'id'    => 26,
                'title' => 'industry_edit',
            ],
            [
                'id'    => 27,
                'title' => 'industry_show',
            ],
            [
                'id'    => 28,
                'title' => 'industry_delete',
            ],
            [
                'id'    => 29,
                'title' => 'industry_access',
            ],
            [
                'id'    => 30,
                'title' => 'turnover_create',
            ],
            [
                'id'    => 31,
                'title' => 'turnover_edit',
            ],
            [
                'id'    => 32,
                'title' => 'turnover_show',
            ],
            [
                'id'    => 33,
                'title' => 'turnover_delete',
            ],
            [
                'id'    => 34,
                'title' => 'turnover_access',
            ],
            [
                'id'    => 35,
                'title' => 'employment_create',
            ],
            [
                'id'    => 36,
                'title' => 'employment_edit',
            ],
            [
                'id'    => 37,
                'title' => 'employment_show',
            ],
            [
                'id'    => 38,
                'title' => 'employment_delete',
            ],
            [
                'id'    => 39,
                'title' => 'employment_access',
            ],
            [
                'id'    => 40,
                'title' => 'record_create',
            ],
            [
                'id'    => 41,
                'title' => 'record_edit',
            ],
            [
                'id'    => 42,
                'title' => 'record_show',
            ],
            [
                'id'    => 43,
                'title' => 'record_delete',
            ],
            [
                'id'    => 44,
                'title' => 'record_access',
            ],
            [
                'id'    => 45,
                'title' => 'survey_create',
            ],
            [
                'id'    => 46,
                'title' => 'survey_edit',
            ],
            [
                'id'    => 47,
                'title' => 'survey_show',
            ],
            [
                'id'    => 48,
                'title' => 'survey_delete',
            ],
            [
                'id'    => 49,
                'title' => 'survey_access',
            ],
            [
                'id'    => 50,
                'title' => 'result_create',
            ],
            [
                'id'    => 51,
                'title' => 'result_edit',
            ],
            [
                'id'    => 52,
                'title' => 'result_show',
            ],
            [
                'id'    => 53,
                'title' => 'result_delete',
            ],
            [
                'id'    => 54,
                'title' => 'result_access',
            ],
            [
                'id'    => 55,
                'title' => 'report_create',
            ],
            [
                'id'    => 56,
                'title' => 'report_edit',
            ],
            [
                'id'    => 57,
                'title' => 'report_show',
            ],
            [
                'id'    => 58,
                'title' => 'report_delete',
            ],
            [
                'id'    => 59,
                'title' => 'report_access',
            ],
            [
                'id'    => 60,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
