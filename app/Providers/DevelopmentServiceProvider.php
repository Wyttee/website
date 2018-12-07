<?php

namespace App\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class DevelopmentServiceProvider extends ServiceProvider
{
    /**
     * Providers List.
     *
     * @var array
     */
    protected $providers = [
        \Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
    ];

    /**
     * Facade Aliases List.
     *
     * @var array
     */
    protected $facadeAliases = [
        //
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        if (in_array($this->app->environment(), ['local', 'testing'], true)) {
            $this->registerProviders();
            $this->registerFacadeAliases();
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Register Service Providers.
     *
     * @return void
     */
    protected function registerProviders(): void
    {
        foreach ($this->providers as $provider) {
            $this->app->register($provider);
        }
    }

    /**
     * Register Facade Aliases.
     *
     * @return void
     */
    public function registerFacadeAliases(): void
    {
        $loader = AliasLoader::getInstance();

        foreach ($this->facadeAliases as $alias => $facade) {
            $loader->alias($alias, $facade);
        }
    }
}
