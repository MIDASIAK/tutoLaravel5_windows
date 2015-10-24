<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
		$this->app->bind(
		'App\Gestion\PhotoGestionInterface',
		'App\Gestion\PhotoGestion'
    		);

		$this->app->bind(
		'App\Gestion\WordGestionInterface',
		'App\Gestion\WordGestion'
    		);

		$this->app->bind(
		'App\Repositories\EmailRepositoryInterface', 
		'App\Repositories\EmailRepository'
		);

		$this->app->bind(
		'App\Repositories\UtilisateurRepositoryInterface', 
		'App\Repositories\UtilisateurRepository'
		);

    }
}
