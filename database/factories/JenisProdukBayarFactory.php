<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\JenisProdukBayar;
use Faker\Generator as Faker;

$factory->define(JenisProdukBayar::class, function (Faker $faker) {

    return [
        'jenis_produk' => $faker->word,
        'nominal' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
