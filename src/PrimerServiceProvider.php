<?php

namespace PrimerUI;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;
use PrimerUI\Preset;

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

            $command->info('PrimerUI scaffolding installed successfully.');
            $command->comment('Here\'s what you\'ll need to do next:');
            
            $command->newLine();

            $command->warn('npm install && npm run dev');
            $command->comment('Compile your fresh scaffolding');

            $command->newLine();

            $command->warn('"files": ["support/helpers.php"]');
            $command->comment('Copy this in the autoload section in composer.json.');

            $command->newLine();

            $command->warn('composer dumpautoload');
            $command->comment('Refresh composer classes.');

            $command->newLine();

            $command->warn('App\Providers\BladeServiceProvider::class,');
            $command->comment('Copy this to the list of service providers.');

            $command->newLine();

            $command->warn('php artisan view:clear');
            $command->comment('Update view files to enable custom components.');
        });
    }
}
