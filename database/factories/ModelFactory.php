<?php

namespace Bakhodirov\LaravelExample\Database\Factories;

use Bakhodirov\Models\MyModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
