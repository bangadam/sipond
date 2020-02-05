<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\JenisPrestasi;
use Faker\Generator as Faker;

$factory->define(JenisPrestasi::class, function (Faker $faker) {

    return [
        'nama' => $faker->word
    ];
});
