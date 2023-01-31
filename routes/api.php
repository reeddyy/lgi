<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Users
    Route::apiResource('users', 'UsersApiController');

    // Country
    Route::apiResource('countries', 'CountryApiController');

    // Industry
    Route::apiResource('industries', 'IndustryApiController');

    // Turnover
    Route::apiResource('turnovers', 'TurnoverApiController');

    // Employment
    Route::apiResource('employments', 'EmploymentApiController');

    // Records
    Route::apiResource('records', 'RecordsApiController');
});
