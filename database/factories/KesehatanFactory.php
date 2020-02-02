<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Kesehatan;
use Faker\Generator as Faker;

$factory->define(Kesehatan::class, function (Faker $faker) {

    return [
        'no_induk' => $faker->word,
        'tgl_mulai' => $faker->word,
        'tgl_selesai' => $faker->word,
        'keluhan' => $faker->word,
        'obat' => $faker->word,
        'catatan' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
