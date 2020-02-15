<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PelanggaranDetail;
use Faker\Generator as Faker;

$factory->define(PelanggaranDetail::class, function (Faker $faker) {

    return [
        'id_pelanggaran' => $faker->randomDigitNotNull,
        'no_induk' => $faker->randomDigitNotNull,
        'id_tindakan' => $faker->randomDigitNotNull,
        'catatan' => $faker->word,
        'poin' => $faker->randomDigitNotNull,
        'tgl_pelanggaran' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
