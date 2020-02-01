<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Kelas;
use Faker\Generator as Faker;

$factory->define(Kelas::class, function (Faker $faker) {

    return [
        'gn_kelas' => $faker->randomDigitNotNull,
        'nm_kelas' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
