<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BioSiswa
 * @package App\Models
 * @version February 2, 2020, 8:25 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection kelas
 * @property \Illuminate\Database\Eloquent\Collection kesehatans
 * @property \Illuminate\Database\Eloquent\Collection pelanggarans
 * @property \Illuminate\Database\Eloquent\Collection perizinans
 * @property \Illuminate\Database\Eloquent\Collection perizinan1s
 * @property \Illuminate\Database\Eloquent\Collection prestasis
 * @property string no_induk_temp
 * @property string nama_lengkap
 * @property string nama_panggilan
 * @property string tmp_lahir
 * @property string tgl_lahir
 * @property string jk
 * @property integer k_agama
 * @property string foto
 * @property string alamat_siswa
 * @property string nama_ayah
 * @property string pekerjaan_ayah
 * @property string pendidikan_ayah
 * @property string no_hp_ayah
 * @property string nama_ibu
 * @property string pekerjaan_ibu
 * @property string pendidikan_ibu
 * @property string no_hp_ibu
 * @property string alamat_ortu
 * @property string no_telp_rmh
 * @property string nama_wali
 * @property string pekerjaan_wali
 * @property string alamat_wali
 * @property string hubungan_wali
 * @property string password
 * @property string pendidikan_terakhir
 * @property string nisn
 * @property string anak_ke
 * @property string diterima_dikelas
 * @property string diterima_tanggal
 * @property string status_dalam_keluarga
 * @property string no_telp_wali
 */
class BioSiswa extends Model
{

    public $table = 'bio_siswa';

    public $primaryKey = 'no_induk';

    public $timestamps = false;

    public $fillable = [
        'no_induk',
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
        'no_telp_wali',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_induk' => 'string',
        'no_induk_temp' => 'string',
        'nama_lengkap' => 'string',
        'nama_panggilan' => 'string',
        'tmp_lahir' => 'string',
        'tgl_lahir' => 'string',
        'jk' => 'string',
        'k_agama' => 'integer',
        'foto' => 'string',
        'alamat_siswa' => 'string',
        'nama_ayah' => 'string',
        'pekerjaan_ayah' => 'string',
        'pendidikan_ayah' => 'string',
        'no_hp_ayah' => 'string',
        'nama_ibu' => 'string',
        'pekerjaan_ibu' => 'string',
        'pendidikan_ibu' => 'string',
        'no_hp_ibu' => 'string',
        'alamat_ortu' => 'string',
        'no_telp_rmh' => 'string',
        'nama_wali' => 'string',
        'pekerjaan_wali' => 'string',
        'alamat_wali' => 'string',
        'hubungan_wali' => 'string',
        'password' => 'string',
        'pendidikan_terakhir' => 'string',
        'nisn' => 'string',
        'anak_ke' => 'string',
        'diterima_dikelas' => 'string',
        'diterima_tanggal' => 'string',
        'status_dalam_keluarga' => 'string',
        'no_telp_wali' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_induk' => 'required',
        'no_induk_temp' => 'required',
        'nama_lengkap' => 'required',
        'nama_panggilan' => 'required',
        'tmp_lahir' => 'required',
        'tgl_lahir' => 'required',
        'jk' => 'required',
        'k_agama' => 'required',
        'foto' => 'required',
        'nama_ayah' => 'required',
        'pekerjaan_ayah' => 'required',
        'pendidikan_ayah' => 'required',
        'no_hp_ayah' => 'required',
        'nama_ibu' => 'required',
        'pekerjaan_ibu' => 'required',
        'pendidikan_ibu' => 'required',
        'no_hp_ibu' => 'required',
        'alamat_ortu' => 'required',
        'password' => 'required',
        'pendidikan_terakhir' => 'required'
    ];

    public function pelanggaranDetail() 
    {
        return $this->hasMany(PelanggaranDetail::class, 'no_induk', 'no_induk');
    }
}
