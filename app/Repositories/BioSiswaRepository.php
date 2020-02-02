<?php

namespace App\Repositories;

use App\Models\BioSiswa;
use App\Repositories\BaseRepository;

/**
 * Class BioSiswaRepository
 * @package App\Repositories
 * @version February 2, 2020, 8:25 am UTC
*/

class BioSiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_induk_temp',
        'nama_lengkap',
        'nama_panggilan',
        'tmp_lahir',
        'tgl_lahir',
        'jk',
        'k_agama',
        'foto',
        'alamat_siswa',
        'nama_ayah',
        'pekerjaan_ayah',
        'pendidikan_ayah',
        'no_hp_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'pendidikan_ibu',
        'no_hp_ibu',
        'alamat_ortu',
        'no_telp_rmh',
        'nama_wali',
        'pekerjaan_wali',
        'alamat_wali',
        'hubungan_wali',
        'password',
        'pendidikan_terakhir',
        'nisn',
        'anak_ke',
        'diterima_dikelas',
        'diterima_tanggal',
        'status_dalam_keluarga',
        'no_telp_wali'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BioSiswa::class;
    }
}
