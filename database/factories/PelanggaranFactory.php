<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pelanggaran;
use Faker\Generator as Faker;

$factory->define(Pelanggaran::class, function (Faker $faker) {

    return [
        'keterangan' => $faker->word,
        'skor' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
