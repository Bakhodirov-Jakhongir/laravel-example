<?php

use Bakhodirov\LaravelExample\Tests\TestCase;
use Illuminate\Support\Facades\Route;

uses(TestCase::class)->beforeEach(function () {
    Route::api();
})->in(__DIR__);
