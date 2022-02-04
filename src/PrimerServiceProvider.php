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

            \Artisan::call('view:clear');

            $command->info('PrimerUI scaffolding installed successfully.');
            $command->comment('Don\'t forget to run the following commands:');
            
            $command->table(['Task', 'Description'], 
            [
                ['npm install && npm run dev', 'Compile your fresh scaffolding']
            ]);
        });
    }
}
