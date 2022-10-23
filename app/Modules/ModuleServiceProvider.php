<?php

namespace App\Modules;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // ---------- USER MODULE -----------
        // bind user module class
        $moduleName = "User";
//        $moduleClass = "App\\Modules\\{$moduleName}\\{$moduleName}Module";
//        $moduleInstance = new $moduleClass;
//        $this->app->instance($moduleClass, $moduleInstance);

        // register user module providers
        $providerName = "EventServiceProvider";
        $this->app->register("App\\Modules\\{$moduleName}\\Providers\\$providerName");

        $providerName = "RouteServiceProvider";
        $this->app->register("App\\Modules\\{$moduleName}\\Providers\\$providerName");

         // register user module view path
        $userNamespace = "user";
        $this->loadViewsFrom(app_path("Modules/User/Views"), $userNamespace);

        // ------- POST MODULE ---------
//        // bind post module class
        $moduleName = "Post";
//        $moduleClass = "App\\Modules\\{$moduleName}\\{$moduleName}Module";
//        $moduleInstance = new $moduleClass;
//        $this->app->instance($moduleClass, $moduleInstance);

        // register user module providers
        $providerName = "EventServiceProvider";
        $this->app->register("App\\Modules\\{$moduleName}\\Providers\\$providerName");

        $providerName = "RouteServiceProvider";
        $this->app->register("App\\Modules\\{$moduleName}\\Providers\\$providerName");

        // register user module view path
        $userNamespace = "post";
        $this->loadViewsFrom(app_path("Modules/Post/Views"), $userNamespace);
    }
}
