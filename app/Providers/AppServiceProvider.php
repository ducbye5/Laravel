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

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
// Nếu muốn sử dụng file ở Eloquent
        $this->app->bind(
            'App\Repositories\Contracts\C_NewsRepositoryInterface',
            'App\Repositories\Eloquents\C_NewsRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\C_UserRepositoryInterface',
            'App\Repositories\Eloquents\C_UserRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\C_HomeRepositoryInterface',
            'App\Repositories\Eloquents\C_HomeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\C_ToeicRepositoryInterface',
            'App\Repositories\Eloquents\C_ToeicRepository'
        );
        $this->app->bind(
            'App\Service\ImageService'
        );





        $this->app->bind(
            'App\Repositories\Contracts\V_IndexRepositoryInterface',
            'App\Repositories\Eloquents\V_IndexRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\V_LayoutRepositoryInterface',
            'App\Repositories\Eloquents\V_LayoutRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\V_ToeicRepositoryInterface',
            'App\Repositories\Eloquents\V_ToeicRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\V_TestToeicRepositoryInterface',
            'App\Repositories\Eloquents\V_TestToeicRepository'
        );
        
// Nếu muốn sử dụng file ở Redis
        // $this->app->bind(
        //     'App\Repositories\Contracts\NewsRepositoryInterface',
        //     'App\Repositories\Redis\RedisNewsRepository'
        // );
    }
}
