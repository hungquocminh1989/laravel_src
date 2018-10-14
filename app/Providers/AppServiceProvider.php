<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Libraries\Debug;

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
    	//Add Facedes
        $this->app->singleton('debug', function () {
            return new Debug();
        });
        
        //Add Repositories
        $this->app->singleton(
        	
        	/*
			|--------------------------------------------------------------------------
			| CategoryRepository
			|--------------------------------------------------------------------------
			|
			| Ở chỗ sử dụng chỉ cần Inject Contracts vào là được
			| use App\Contracts\Repositories\CategoryRepository;
			|
			*/
        	\App\Contracts\Repositories\CategoryRepository::class,
	        \App\Repositories\CategoryRepository::class
	        
	    );
        
        //Add IdeHelper
        if ($this->app->environment() !== 'production') {
	        $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
	    }
    }
}
