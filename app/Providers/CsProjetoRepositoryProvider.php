<?php

namespace CsProjeto\Providers;

use Illuminate\Support\ServiceProvider;

class CsProjetoRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
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
        $this->app->bind(
            \CsProjeto\Repositories\ClientRepository::class,
            \CsProjeto\Repositories\ClientRepositoryEloquent::class
        );

        $this->app->bind(
            \CsProjeto\Repositories\ProjectRepository::class,
            \CsProjeto\Repositories\ProjectRepositoryEloquent::class
        );
    }
}
