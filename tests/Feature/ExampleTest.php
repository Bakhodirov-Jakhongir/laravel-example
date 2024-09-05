<?php

use Bakhodirov\LaravelExample\Commands\LaravelExampleCommand;

use function Pest\Laravel\artisan;

it('can output the configured value', function () {
    artisan(LaravelExampleCommand::class)
        ->expectsOutput(config('example.command_output'))
        ->assertExitCode(0);
});
