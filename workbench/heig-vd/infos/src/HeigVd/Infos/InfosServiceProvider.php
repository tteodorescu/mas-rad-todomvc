<?php namespace HeigVd\Infos;

use Illuminate\Support\ServiceProvider;

class InfosServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    $this->package('heig-vd/infos');
  }
  
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
    $this->app['infos'] = $this->app->share(function($app)
    {
      return new Infos;
    });
    
    $this->app->booting(function()
    {
      $loader = \Illuminate\Foundation\AliasLoader::getInstance();
      $loader->alias('Infos', 'HeigVd\Infos\Facades\Infos');
    });    
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('infos');
	}

}
