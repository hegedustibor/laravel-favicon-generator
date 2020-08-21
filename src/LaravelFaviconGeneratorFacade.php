<?php

namespace Hegedustibor\LaravelFaviconGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hegedustibor\LaravelFaviconGenerator\LaravelFaviconGenerator
 */
class LaravelFaviconGeneratorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Laravel Favicon Generator';
    }
}
