<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\prestasi;
use Faker\Generator as Faker;

$factory->define(prestasi::class, function (Faker $faker) {

    return [
        'id_prestasi' => $faker->randomDigitNotNull,
        'no_induk' => $faker->word,
        'tgl_prestasi' => $faker->word,
        'jenis_prestasi' => $faker->word,
        'catatan' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
