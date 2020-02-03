<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Perizinan;
use Faker\Generator as Faker;

$factory->define(Perizinan::class, function (Faker $faker) {

    return [
        'no_induk' => $faker->randomDigitNotNull,
        'tgl_izin' => $faker->word,
        'tgl_kembali' => $faker->word,
        'penjemput' => $faker->word,
        'catatan' => $faker->word,
        'status_izin' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
