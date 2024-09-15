<?php

namespace Bakhodirov\LaravelExample\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;

    public $guarded = [];

    protected string $name;

    public function getUppercasedName(): string
    {
        return strtoupper($this->name);
    }
}
