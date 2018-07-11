<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

                    //Repository


        $this->app->bind(
            'App\Repositories\Interfaces\UserRepositoryInterface',
            'App\Repositories\Eloquents\UserRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\LayoutRepositoryInterface',
            'App\Repositories\Eloquents\LayoutRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\ProfileRepositoryInterface',
            'App\Repositories\Eloquents\ProfileRepository'
        );



                    //Validation
        

        $this->app->bind(
            'App\Http\Validations\Interfaces\LoginUserValidationInterface',
            'App\Http\Validations\LoginUserValidation'
        );

    }
}
