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
            
            $command->table(
                ['npm install && npm run dev', 'Compile your fresh scaffolding'],
                ['"files": ["support/helpers.php"]', 'Copy this in the autoload section in composer.json'],
                ['composer dumpautoload', 'Refresh composer classes'],
                ['App\Providers\BladeServiceProvider::class,', 'Copy this to the list of service providers'],
                ['php artisan view:clear', 'Update view files to enable custom components'],
            );
        });
    }
}
