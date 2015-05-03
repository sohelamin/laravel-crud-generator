<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppzcoderCrudGeneratorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

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
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{

        $this->commands(
        	'App\Console\Commands\AppzcoderCrudCommand',
			'App\Console\Commands\AppzcoderCrudControllerCommand',
			'App\Console\Commands\AppzcoderCrudModelCommand',
			'App\Console\Commands\AppzcoderCrudMigrationCommand',
			'App\Console\Commands\AppzcoderCrudViewCommand'
        );

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		//
	}	

}
