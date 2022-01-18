<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BackendMarketplace;
use Tabuna\Breadcrumbs\Trail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);

Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });

    Route::resource('announcements', 'NewsController');
    
    Route::resource('marketplace', 'Backend\BackendMarketplace');