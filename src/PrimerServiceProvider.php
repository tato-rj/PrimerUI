<?php

namespace PrimerUI;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;
use PrimerUI\Preset;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Helper\Table;

class PrimerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('primer-ui', function($command) {
            (new Preset)->install();

            $command->info('All finished! Here are the next steps:');
            $command->info('php artisan ui primer-ui -> Install the ui package');
            $command->info('npm install & npm run dev -> Install and compile assets');
            $command->info('"files": ["support/helpers.php"] -> Append this to the autoload section in composer.json');
            $command->info('composer dumpautoload -> Refresh composer classes');
        });
    }
}
