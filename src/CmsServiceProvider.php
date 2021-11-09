<?php

namespace Farrokh\Cms;


use Farrokh\Cms\Middleware\Admin;
use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
  public function register()
  {
      $this->app->bind('cms', function (){
          return new Cms;
      });
        return $this->mergeConfigFrom(__DIR__ . '/Configs/main.php','cms');
  }
  public  function boot()
  {
      require __DIR__ .'/Route/routes.php';
      $this->loadViewsFrom(__DIR__ . '/views','cms');
//      $this->app['router']->middleware('admin',Admin::class);
      $this->publishes([
          __DIR__.'/Configs/main.php'=>config_path('cms.php'),
          __DIR__.'/views'=>base_path('resources/views/cms'),
          __DIR__.'/Migrations'=>database_path('/migrations'),
      ]);
  }
}
