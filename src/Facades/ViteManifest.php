<?php

namespace OhSeeSoftware\LaravelViteManifest\Facades;

use Illuminate\Support\Facades\Facade;

class ViteManifest extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-vite-manifest';
    }
}
