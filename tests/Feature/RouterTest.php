<?php

use Bakhodirov\LaravelExample\Http\Controllers\MyController;

it('has a route', function () {
    $this->get('my-first-route')->assertOk();
    $this->get(action([MyController::class, 'index']))->assertOk();
});
