<?php

namespace App\Providers;

use App\About;
use App\Project;
use App\Service;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $servicesHome = Service::latest()->get();
            $aboutsHome = About::get();
            $projectsHome = Project::latest()->get();
            //Registering Global variable
            $view->with('servicesHome', $servicesHome);
            $view->with('aboutsHome', $aboutsHome);
            $view->with('projectsHome', $projectsHome);
        });
    }
}