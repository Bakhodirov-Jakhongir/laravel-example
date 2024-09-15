<?php

namespace Bakhodirov\LaravelExample;

use Bakhodirov\LaravelExample\Commands\LaravelExampleCommand;
use Bakhodirov\LaravelExample\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
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

    public function packageRegistered()
    {
        Route::macro('api', function (string $baseUrl = 'example') {
            Route::prefix($baseUrl)->group(function () {
                Route::get('/', [MyController::class, 'index']);
            });
        });

        Route::get('view', [MyController::class, 'returnIndexView']);

        Route::get('my-first-route', [MyController::class, 'getMessage']);
    }
}
