<?php
Route::group(['middleware' => ['web', 'admin']], function () {
    // Route::prefix(config('app.admin_url'))->group(function () {

    //     // all admin routes will place here

    //     // não sei se esta rota fica dentro de prefix ou group pois a documentação não foi clara por enquanto vou deixar fora
    //     // Route::view('/admin/hello-world', 'helloworld::admin.index');
    
    // });
    
    Route::view('/admin/hello-world', 'helloworld::admin.index'); // não sei se esta rota fica dentro de prefix ou group pois a documentação não foi clara por enquanto vou deixar no group()

    //

    Route::prefix('admin')->group(function () {
        Route::get('meusupexp', 'ACME\HelloWorld\Http\Controllers\Admin\MeuSupExpController@index')->name('meusupexp.admin.index');
        Route::get('meusupexp/create', 'ACME\HelloWorld\Http\Controllers\Admin\MeuSupExpController@create')->name('meusupexp.admin.create');
        Route::post('meusupexp/store', 'ACME\HelloWorld\Http\Controllers\Admin\MeuSupExpController@store')->name('meusupexp.admin.store');
        Route::get('meusupexp/{id}', 'ACME\HelloWorld\Http\Controllers\Admin\MeuSupExpController@edit')->name('meusupexp.admin.edit');
        Route::post('meusupexp/{id}', 'ACME\HelloWorld\Http\Controllers\Admin\MeuSupExpController@update')->name('meusupexp.admin.update');
        Route::get('meusupexp/delet/{id}', 'ACME\HelloWorld\Http\Controllers\Admin\MeuSupExpController@destroy')->name('meusupexp.admin.destroy');
    });

});

//

// Route::group([
//         'prefix'        => 'admin/helloworld',
//         'middleware'    => ['web', 'admin']
//     ], function () {

//         Route::get('', 'ACME\HelloWorld\Http\Controllers\Admin\HelloWorldController@index')->defaults('_config', [
//             'view' => 'helloworld::admin.index',
//         ])->name('admin.helloworld.index');

// });