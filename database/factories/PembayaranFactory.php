<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pembayaran;
use Faker\Generator as Faker;

$factory->define(Pembayaran::class, function (Faker $faker) {

    return [
        'no_induk' => $faker->word,
        'id_jenis_bayar' => $faker->randomDigitNotNull,
        'id_produk_bayar' => $faker->randomDigitNotNull,
        'jumlah' => $faker->randomDigitNotNull,
        'catatan' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
