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

            $this->info('PrimerUI scaffolding installed successfully.');
            $this->comment('Here\'s what you\'ll need to do next:');
            
            $this->newLine();

            $this->warn('npm install && npm run dev');
            $this->comment('Compile your fresh scaffolding');

            $this->newLine();

            $this->warn('"files": ["support/helpers.php"]');
            $this->comment('Copy this in the autoload section in composer.json.');

            $this->newLine();

            $this->warn('composer dumpautoload');
            $this->comment('Refresh composer classes.');

            $this->newLine();

            $this->warn('App\Providers\BladeServiceProvider::class,');
            $this->comment('Copy this to the list of service providers.');

            $this->newLine();

            $this->warn('php artisan view:clear');
            $this->comment('Update view files to enable custom components.');
        });
    }
}
