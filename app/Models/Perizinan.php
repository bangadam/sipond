<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Perizinan
 * @package App\Models
 * @version February 2, 2020, 12:21 pm UTC
 *
 * @property integer no_induk
 * @property string tgl_izin
 * @property string tgl_kembali
 * @property string penjemput
 * @property string catatan
 * @property integer status_izin
 */
class Perizinan extends Model
{
    public $table = 'perizinan';
    public $primaryKey = 'id_izin';
    public $timestamps = false;

    public $fillable = [
        'no_induk',
        'tgl_izin',
        'tgl_kembali',
        'penjemput',
        'catatan',
        'status_izin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'no_induk' => 'integer',
        'tgl_izin' => 'string',
        'tgl_kembali' => 'string',
        'penjemput' => 'string',
        'catatan' => 'string',
        'status_izin' => 'char'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_induk' => 'required',
        'tgl_izin' => 'required',
        'tgl_kembali' => 'required',
        'penjemput' => 'required',
        'catatan' => 'required',
        'status_izin' => 'required'
    ];

    public function bio_siswa()
    {
        return $this->belongsTo(BioSiswa::class, 'no_induk', 'no_induk');
    }

    public function perizinanKembali()
    {
        return $this->hasOne(PerizinanKembali::class, 'id_izin', 'id_izin');
    }
}
