<?php

use Bakhodirov\LaravelExample\Models\MyModel;

it('can create my model', function () {
    $myModel = MyModel::factory()->create();
    $this->assertModelExists($myModel);
});

it('can return the uppercased value of a name', function () {
    $myModel = MyModel::factory()->create(['name' => 'John']);
    expect($myModel->getUppercasedName())->toEqual('JOHN');
});
