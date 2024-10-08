<?php

namespace Bakhodirov\LaravelExample;

use Bakhodirov\LaravelExample\Commands\LaravelExampleCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my_models_table.php.stub')
            ->hasCommand(LaravelExampleCommand::class);
    }
}
