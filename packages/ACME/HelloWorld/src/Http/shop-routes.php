<?php
use ACME\HelloWorld\Http\Controllers\Shop\HelloWorldController;

Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {

    // all shop routes will be place here
    // Route::view('/hello-world', 'helloworld::shop.index');
    Route::get('/hello-world', 'ACME\HelloWorld\Http\Controllers\Shop\HelloWorldController@index');
    // Route::get('/hello-world', '');
});

// Route::group([
//         'prefix'     => 'helloworld',
//         'middleware' => ['web', 'theme', 'locale', 'currency']
//     ], function () {

//         Route::get('/', 'ACME\HelloWorld\Http\Controllers\Shop\HelloWorldController@index')->defaults('_config', [
//             'view' => 'helloworld::shop.index',
//         ])->name('shop.helloworld.index');

// });