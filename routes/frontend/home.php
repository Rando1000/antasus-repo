<?php

use App\Domains\Auth\Models\User;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::resource('imprint', 'ImprintController');

Route::get('terms','PageController@terms');
Route::get('privacy','PageController@privacy');
Route::get('team','PageController@team');
Route::get('help','PageController@help');
Route::get('faq','PageController@faq');
Route::get('test','PageController@test');
Route::get('docs','PageController@docs');
Route::get('tracking','PageController@tracking');

//MARKET

Route::get('/markets/portfolio', 'CategoryProductController@portfolio')->name('portfolio');

Route::get('/markets/search/', 'ProductController@search');


Route::get('markets/', 'ProductController@index')->name('markets');
Route::get('/markets/advert/categories/', 'CategoryController@advert')->name('advert');
Route::get('/markets/advert/categories/{id}', 'CategoryController@creater')->name('advertcreate');
Route::get('/markets/categories/{id}', 'CategoryController@categories')->name('categories');



Route::resource('/market/categories.product', 'CategoryProductController');



// Route::get('wallets', 'WalletController');




Route::get('testing', 'CategoryController@testing');




//CHAT
Route::get('chat', [ChatsController::class, 'index'])->name('frontend.chat.index');

Route::get('conversation/{userId}', [MessageController::class, 'conversation'])->name('message.conversation');

Route::post('send-message', [MessageController::class, 'sendMessage'])->name('message.send-message');

Route::post('send-group-message', [MessageController::class, 'sendGroupMessage'])->name('message.send-group-message');

Route::resource('message-groups', 'MessageGroupController');



/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the user has not confirmed their email
 */

Route::group(['as' => 'user.', 'middleware' => ['auth', 'password.expires', config('boilerplate.access.middleware.verified')]], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
        
    Route::post('dashboard', [DashboardController::class, 'upload']);
    // Route::post('dashboard', [DashboardController::class, 'uploadavat']);
    Route::get('account', [AccountController::class, 'index'])->name('account');

    Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');

});
