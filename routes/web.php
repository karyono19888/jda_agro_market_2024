<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.signin',[
        'title' => 'Sign In'
    ]);
});

Route::get('/signup', function () {
    return view('auth.signup',[
        'title' => 'Sign Up'
    ]);
});
Route::get('/forgot-password', function () {
    return view('auth.forgotPassword',[
        'title' => 'Forgot Password'
    ]);
});

Route::prefix('admin')->name('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard',[
            'title' => 'Administrator Dashborad'
        ]);
    });

    Route::prefix('users')->name('.users')->group(function () {
        Route::get('/', function () {
            return view('admin.users.index',[
                'title' => 'User Management'
            ]);
        });

        Route::get('/roles', function () {
            return view('admin.roles.index',[
                'title' => 'Roles Management'
            ]);
        })->name('.roles');

        Route::get('/permission', function () {
            return view('admin.permission.index',[
                'title' => 'Permission Management'
            ]);
        })->name('.permission');
    });

    Route::prefix('products')->name('.product')->group(function () {
        Route::get('/', function () {
            return view('admin.products.index',[
                'title' => 'Produts Management'
            ]);
        });

        Route::get('/categories', function () {
            return view('admin.productCategories.index',[
                'title' => 'Products Categories'
            ]);
        })->name('.categories');
    });

    Route::prefix('orders')->name('.order')->group(function () {
        Route::get('/', function () {
            return view('admin.orders.index',[
                'title' => 'Orders Management'
            ]);
        });
    });

    Route::prefix('customer')->name('.customer')->group(function () {
        Route::get('/', function () {
            return view('admin.customers.index',[
                'title' => 'Customer Management'
            ]);
        });
    });

    Route::prefix('promotion')->name('.promotion')->group(function () {
        Route::get('/', function () {
            return view('admin.promotions.index',[
                'title' => 'Promotion Management'
            ]);
        });
    });

    Route::prefix('static-content')->name('.staticContent')->group(function () {
        Route::get('/', function () {
            return view('admin.staticContent.index',[
                'title' => 'Static Content'
            ]);
        });
    });

});