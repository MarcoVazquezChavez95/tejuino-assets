<?php

namespace Tejuino\Assets;

use Tejuino\Sdk\Package;
use Tejuino\Sdk\Traits\Publishable;
use Illuminate\Support\ServiceProvider;

class AssetsServiceProvider extends ServiceProvider
{
    // Implements Tejuino Publishable Trait
    use Publishable;

    // Module settings
    protected $config;

    // Boot service provider
    public function boot()
    {
        $this->config = Package::getConfig(__DIR__);
        $this->publishFiles(__DIR__);
    }
}
