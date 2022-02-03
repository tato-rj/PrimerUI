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
        UiCommand::macro('primer', function($command) {
            (new Preset)->install();

            $command->info('All finished! Just install and compile the assets and you\'re set to go.');
        });
    }
}
