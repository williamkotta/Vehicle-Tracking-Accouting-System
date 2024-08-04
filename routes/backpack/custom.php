<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\CRUD.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('assignment', 'AssignmentCrudController');
    Route::crud('customer', 'CustomerCrudController');
    Route::crud('device', 'DeviceCrudController');
    Route::crud('device-requisition', 'DeviceRequisitionCrudController');
    Route::crud('job-card', 'JobCardCrudController');
    Route::crud('report', 'ReportCrudController');
    Route::crud('vehicle', 'VehicleCrudController');
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */
