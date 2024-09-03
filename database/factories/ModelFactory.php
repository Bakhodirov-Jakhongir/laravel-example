<?php

namespace Bakhodirov\LaravelExample\Database\Factories;

use Bakhodirov\Models\MyModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
