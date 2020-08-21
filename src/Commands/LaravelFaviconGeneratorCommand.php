<?php

namespace Hegedustibor\LaravelFaviconGenerator\Commands;

use Illuminate\Console\Command;

class LaravelFaviconGeneratorCommand extends Command
{
    public $signature = 'Laravel Favicon Generator';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
