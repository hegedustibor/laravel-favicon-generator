<?php

namespace Hegedustibor\LaravelFaviconGenerator\Tests;

use Hegedustibor\LaravelFaviconGenerator\LaravelFaviconGeneratorServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        $this->withFactories(__DIR__.'/database/factories');
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelFaviconGeneratorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        /*
        include_once __DIR__.'/../database/migrations/create_Laravel Favicon Generator_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
