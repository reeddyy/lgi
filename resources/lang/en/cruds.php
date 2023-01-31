<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'name'                         => 'Name',
            'name_helper'                  => 'Name of Respondent',
            'email'                        => 'Email',
            'email_helper'                 => 'Email Address',
            'email_verified_at'            => 'Email verified at',
            'email_verified_at_helper'     => ' ',
            'password'                     => 'Password',
            'password_helper'              => ' ',
            'roles'                        => 'Roles',
            'roles_helper'                 => ' ',
            'remember_token'               => 'Remember Token',
            'remember_token_helper'        => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'two_factor'                   => 'Two-Factor Auth',
            'two_factor_helper'            => ' ',
            'two_factor_code'              => 'Two-factor code',
            'two_factor_code_helper'       => ' ',
            'two_factor_expires_at'        => 'Two-factor expires at',
            'two_factor_expires_at_helper' => ' ',
            'designation'                  => 'Designation',
            'designation_helper'           => 'Job Designation',
            'company'                      => 'Company',
            'company_helper'               => 'Company Name',
            'country'                      => 'Country',
            'country_helper'               => 'Country of Incorporation',
            'industry'                     => 'Industry',
            'industry_helper'              => 'Type of Industry',
            'turnover'                     => 'Turnover',
            'turnover_helper'              => 'Estimated Annual Turnover',
            'employment'                   => 'Employment',
            'employment_helper'            => 'Estimated Employment Size',
            'phone'                        => 'Phone',
            'phone_helper'                 => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'country' => [
        'title'          => 'Country',
        'title_singular' => 'Country',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'country'           => 'Country',
            'country_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'region'            => 'Region',
            'region_helper'     => ' ',
        ],
    ],
    'option' => [
        'title'          => 'Options',
        'title_singular' => 'Option',
    ],
    'industry' => [
        'title'          => 'Industry',
        'title_singular' => 'Industry',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'industry'          => 'Industry',
            'industry_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'turnover' => [
        'title'          => 'Turnover',
        'title_singular' => 'Turnover',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'turnover'          => 'Turnover',
            'turnover_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'factor'            => 'Factor',
            'factor_helper'     => ' ',
        ],
    ],
    'employment' => [
        'title'          => 'Employment',
        'title_singular' => 'Employment',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'employment'        => 'Employment',
            'employment_helper' => ' ',
            'factor'            => 'Factor',
            'factor_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'record' => [
        'title'          => 'Records',
        'title_singular' => 'Record',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'company'            => 'Company',
            'company_helper'     => ' ',
            'country'            => 'Country',
            'country_helper'     => ' ',
            'bv'                 => 'Business Volume',
            'bv_helper'          => ' ',
            'tpt'                => 'Transportation',
            'tpt_helper'         => ' ',
            'tc'                 => 'Transport Capacity',
            'tc_helper'          => ' ',
            'emp'                => 'Employment',
            'emp_helper'         => ' ',
            'lc'                 => 'Logistics Cost',
            'lc_helper'          => ' ',
            'wh'                 => 'Warehousing',
            'wh_helper'          => ' ',
            'wc'                 => 'Warehouse Capacity',
            'wc_helper'          => ' ',
            'inv'                => 'Inventory',
            'inv_helper'         => ' ',
            'gfs'                => 'Goods for Sale',
            'gfs_helper'         => ' ',
            'comment'            => 'Comment',
            'comment_helper'     => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'created_by'         => 'Created By',
            'created_by_helper'  => ' ',
            'email'              => 'Email',
            'email_helper'       => ' ',
            'phone'              => 'Phone',
            'phone_helper'       => ' ',
            'designation'        => 'Designation',
            'designation_helper' => ' ',
            'industry'           => 'Industry',
            'industry_helper'    => ' ',
            'turnover'           => 'Turnover',
            'turnover_helper'    => ' ',
            'employment'         => 'Employment',
            'employment_helper'  => ' ',
            'bs'                 => 'Business Sentiment',
            'bs_helper'          => ' ',
        ],
    ],
    'survey' => [
        'title'          => 'Survey',
        'title_singular' => 'Survey',
    ],
    'result' => [
        'title'          => 'Results',
        'title_singular' => 'Result',
    ],
    'report' => [
        'title'          => 'Reports',
        'title_singular' => 'Report',
    ],
];
