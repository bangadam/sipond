<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PelanggaranDetail;
use Faker\Generator as Faker;

$factory->define(PelanggaranDetail::class, function (Faker $faker) {

    return [
        'no_induk' => $faker->randomDigitNotNull,
        'tindakan' => $faker->word,
        'catatan' => $faker->word,
        'poin' => $faker->randomDigitNotNull,
        'tgl_pelanggaran' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
