<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\JenisBayar;
use Faker\Generator as Faker;

$factory->define(JenisBayar::class, function (Faker $faker) {

    return [
        'jenis_bayar' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
