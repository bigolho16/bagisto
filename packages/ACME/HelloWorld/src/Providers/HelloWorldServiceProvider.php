<?php
namespace ACME\HelloWorld\Providers;

use Illuminate\Support\ServiceProvider;

/**
* HelloWorldServiceProvider
*
* @copyright 2020 Webkul Software Pvt. Ltd. (http://www.webkul.com)
*/
class HelloWorldServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Http/admin-routes.php');

        $this->loadRoutesFrom(__DIR__ . '/../Http/shop-routes.php');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'helloworld'); // helloworld provavelmente é apenas uma especie de variável deste diretório no primeiro parametro!
        
        //
        
        $this->mergeConfigFrom(dirname(__DIR__) . '/Config/system.php', 'core');
        
        //

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

    }

    /**
    * Register services.
    *
    * @return void
    */
    public function register()
    { // pelo meu ver aqui só entra: "serviço fornecido por um provedor de serviços que ainda não foi carregado - de acordo com a doc.".

        $this->mergeConfigFrom(dirname(__DIR__) . '/Config/menu-sup-exp.php', 'menu.admin'); // p/ o menu-sup-exp.php

    }
}

// namespace ACME\HelloWorld\Providers;

// use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Event;

// class HelloWorldServiceProvider extends ServiceProvider
// {
//     /**
//      * Bootstrap services.
//      *
//      * @return void
//      */
//     public function boot()
//     {
//         $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

//         $this->loadRoutesFrom(__DIR__ . '/../Http/admin-routes.php');

//         $this->loadRoutesFrom(__DIR__ . '/../Http/shop-routes.php');

//         $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'helloworld');

//         $this->publishes([
//             __DIR__ . '/../../publishable/assets' => public_path('themes/default/assets'),
//         ], 'public');

//         $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'helloworld');

//         Event::listen('bagisto.admin.layout.head', function($viewRenderEventManager) {
//             $viewRenderEventManager->addTemplate('helloworld::admin.layouts.style');
//         });
//     }

//     /**
//      * Register services.
//      *
//      * @return void
//      */
//     public function register()
//     {
//         $this->registerConfig();
//     }

//     /**
//      * Register package config.
//      *
//      * @return void
//      */
//     protected function registerConfig()
//     {
//         $this->mergeConfigFrom(
//             dirname(__DIR__) . '/Config/admin-menu.php', 'menu.admin'
//         );

//         $this->mergeConfigFrom(
//             dirname(__DIR__) . '/Config/acl.php', 'acl'
//         );
//     }
// }