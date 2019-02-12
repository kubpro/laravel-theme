<?php

namespace Kubpro\Theme\Providers;
use Illuminate\Support\ServiceProvider;

class ThemesServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->publishFiles();

    }

    /**
     * publish files funtion
     */
    private function publishFiles()
    {
        $this->publishes([
            __DIR__ . '/../Publish/Config/theme.php' => base_path('config/theme.php'),
        ], 'theme');

        $this->publishes([
            __DIR__.'/../Publish/Assets' => public_path('themes'),
        ], 'theme');

        $this->publishes([
            __DIR__ . '/../Publish/Views' => base_path('resources/views/themes/default'),
        ], 'theme');

    }

}
