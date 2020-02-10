<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tindakan;
use Faker\Generator as Faker;

$factory->define(tindakan::class, function (Faker $faker) {

    return [
        'nama_tindakan' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
