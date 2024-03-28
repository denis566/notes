<?php

use Illuminate\Support\Facades\Route;



//  Route::group(['namespace' => 'App\Http\Controllders\Main'], function () {
//     Route::get( uri: '/', 'IndexController')->name('index');
//  });

    Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
        Route::get('/', 'IndexController')->name('index');
    });



    // Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix'=>'admin'], function () {
    //     Route::group(['namespace' => 'Main'], function () {
    //         Route::get('/', 'IndexController')->name('index');
    //     });
        
    // });

    Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
        // Route::get('/', 'IndexController')->name('index');

        Route::group(['namespace' => 'Main'], function () {
            Route::get('/', 'IndexController')->name('index');
        });
        Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
            Route::get('/', 'IndexController')->name('admin.category.index');
            Route::get('/create', 'CreateController')->name('admin.category.create');
            Route::post('/', 'StoreController')->name('admin.category.store');

        });

    });


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
