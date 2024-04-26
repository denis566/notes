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


        Route::group(['namespace' => 'Note', 'prefix' => 'notes'], function () {
            Route::get('/', 'IndexController')->name('admin.note.index');
            Route::get('/create', 'CreateController')->name('admin.note.create');
            Route::post('/', 'StoreController')->name('admin.note.store');
            Route::get('/{note}', 'ShowController')->name('admin.note.show');
            Route::get('/{note}/edit', 'EditController')->name('admin.note.edit');
            Route::patch('/{note}', 'UpdateController')->name('admin.note.update');
           Route::delete('/{note}', 'DeleteController')->name('admin.note.delete');
        });



        Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
            Route::get('/', 'IndexController')->name('admin.category.index');
            Route::get('/create', 'CreateController')->name('admin.category.create');
            Route::post('/', 'StoreController')->name('admin.category.store');
            Route::get('/{category}', 'ShowController')->name('admin.category.show');
            Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
            Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
           Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
        });

        Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
            Route::get('/', 'IndexController')->name('admin.tag.index');
            Route::get('/create', 'CreateController')->name('admin.tag.create');
            Route::post('/', 'StoreController')->name('admin.tag.store');
            Route::get('/{tag}', 'ShowController')->name('admin.tag.show');
            Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
            Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
           Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete');
        });

    });


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
