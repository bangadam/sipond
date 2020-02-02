<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BioSiswa;
use Faker\Generator as Faker;

$factory->define(BioSiswa::class, function (Faker $faker) {

    return [
        'no_induk_temp' => $faker->word,
        'nama_lengkap' => $faker->word,
        'nama_panggilan' => $faker->word,
        'tmp_lahir' => $faker->word,
        'tgl_lahir' => $faker->word,
        'jk' => $faker->word,
        'k_agama' => $faker->randomDigitNotNull,
        'foto' => $faker->word,
        'alamat_siswa' => $faker->word,
        'nama_ayah' => $faker->word,
        'pekerjaan_ayah' => $faker->word,
        'pendidikan_ayah' => $faker->word,
        'no_hp_ayah' => $faker->word,
        'nama_ibu' => $faker->word,
        'pekerjaan_ibu' => $faker->word,
        'pendidikan_ibu' => $faker->word,
        'no_hp_ibu' => $faker->word,
        'alamat_ortu' => $faker->word,
        'no_telp_rmh' => $faker->word,
        'nama_wali' => $faker->word,
        'pekerjaan_wali' => $faker->word,
        'alamat_wali' => $faker->word,
        'hubungan_wali' => $faker->word,
        'password' => $faker->word,
        'pendidikan_terakhir' => $faker->word,
        'nisn' => $faker->word,
        'anak_ke' => $faker->word,
        'diterima_dikelas' => $faker->word,
        'diterima_tanggal' => $faker->word,
        'status_dalam_keluarga' => $faker->word,
        'no_telp_wali' => $faker->word
    ];
});
