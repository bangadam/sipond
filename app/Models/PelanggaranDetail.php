<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PelanggaranDetail
 * @package App\Models
 * @version February 2, 2020, 7:44 am UTC
 *
 * @property integer no_induk
 * @property string tindakan
 * @property string catatan
 * @property integer poin
 * @property string tgl_pelanggaran
 */
class PelanggaranDetail extends Model
{

    public $table = 'pelanggaran_detail';

    protected $primaryKey = 'id_pelanggaran';

    public $timestamps = false;

    public $fillable = [
        'id_pelanggaran',
        'no_induk',
        'tindakan',
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
        'id_pelaggaran' => 'integer',
        'no_induk' => 'integer',
        'tindakan' => 'string',
        'catatan' => 'string',
        'poin' => 'integer',
        'tgl_pelanggaran' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_induk' => 'required',
        'tindakan' => 'required',
        'catatan' => 'required',
        'poin' => 'required',
        'tgl_pelanggaran' => 'required'
    ];

    public function bioSiswa()
    {
        return $this->hasOne(BioSiswa::class, 'no_induk', 'no_induk');
    }
}
