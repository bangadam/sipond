<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PelanggaranDetail
 * @package App\Models
 * @version February 15, 2020, 4:00 am UTC
 *
 * @property integer id_pelanggaran
 * @property integer no_induk
 * @property integer id_tindakan
 * @property string catatan
 * @property integer poin
 * @property string tgl_pelanggaran
 */
class PelanggaranDetail extends Model
{
    // use SoftDeletes;

    public $table = 'pelanggaran_detail';

    public $timestamps = false;
    

    // protected $dates = ['deleted_at'];



    public $fillable = [
        'id_pelanggaran',
        'no_induk',
        'id_tindakan',
        'catatan',
        'poin',
        'tgl_pelanggaran'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_pelanggaran' => 'integer',
        'no_induk' => 'integer',
        'id_tindakan' => 'integer',
        'catatan' => 'string',
        'poin' => 'integer',
        'tgl_pelanggaran' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_pelanggaran' => 'required',
        'no_induk' => 'required',
        'id_tindakan' => 'required',
        'poin' => 'required',
        'tgl_pelanggaran' => 'required'
    ];

    public function pelanggaran()
    {
        return $this->hasOne(Pelanggaran::class, 'id_pelanggaran', 'id_pelanggaran');
    }

    public function tindakan()
    {
        return $this->hasOne(Tindakan::class, 'id', 'id_tindakan');
    }

    public function bio_siswa()
    {
        return $this->hasOne(BioSiswa::class, 'no_induk', 'no_induk');
    }
    
}
