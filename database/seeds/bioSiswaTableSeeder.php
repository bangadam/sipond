<?php

use Illuminate\Database\Seeder;

class bioSiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        foreach(range(0,20) as $data) {
            \App\Models\BioSiswa::create([
                'no_induk' => $faker->creditCardNumber(),
                'no_induk_temp' => $faker->creditCardNumber(),
                'nama_lengkap' => $faker->firstName,
                'nama_panggilan' => $faker->firstName,
                'tmp_lahir' => $faker->word(6),
                'tgl_lahir' => $faker->date,
                'jk' => 'Pria',
                'k_agama' => 2,
                'foto' => $faker->sentence(5),
                'alamat_siswa' => $faker->word(6),
                'nama_ayah' => $faker->firstName,
                'pekerjaan_ayah' => $faker->word(6),
                'pendidikan_ayah' => $faker->word(6),
                'no_hp_ayah' => $faker->phoneNumber,
                'nama_ibu' => $faker->firstName,
                'pekerjaan_ibu' => $faker->word(6),
                'pendidikan_ibu' => $faker->word(6),
                'no_hp_ibu' => $faker->phoneNumber,
                'alamat_ortu' => $faker->word(6),
                'no_telp_rmh' => $faker->phoneNumber,
                'nama_wali' => $faker->firstName,
                'pekerjaan_wali' => $faker->word(6),
                'alamat_wali' => $faker->word(6),
                'hubungan_wali' => $faker->word(6),
                'password' => $faker->word(6),
                'pendidikan_terakhir' => $faker->word(6),
                'nisn' => $faker->creditCardNumber,
                'anak_ke' => 1,
                'diterima_dikelas' => $faker->word(6),
                'diterima_tanggal' => $faker->date,
                'status_dalam_keluarga' => 1,
                'no_telp_wali' => $faker->phoneNumber,
            ]);
        }
    }
}
