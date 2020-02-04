<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Kesehatan
 * @package App\Models
 * @version February 2, 2020, 3:12 am UTC
 *
 * @property string no_induk
 * @property string tgl_mulai
 * @property string tgl_selesai
 * @property string keluhan
 * @property string obat
 * @property string catatan
 */
class Kesehatan extends Model
{
    public $table = 'kesehatan';

    public $primaryKey = 'id_kesehatan';

    public $timestamps = false;

    public $fillable = [
        'no_induk',
        'tgl_mulai',
        'tgl_selesai',
        'keluhan',
        'obat',
        'catatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_kesehatan' => 'integer',
        'no_induk' => 'string',
        'tgl_mulai' => 'string',
        'tgl_selesai' => 'string',
        'keluhan' => 'string',
        'obat' => 'string',
        'catatan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_induk' => 'required',
        'tgl_mulai' => 'required',
        'tgl_selesai' => 'required',
        'keluhan' => 'required',
        'obat' => 'required',
        'catatan' => 'required'
    ];

    public function bio_siswa()
    {
        return $this->hasOne(BioSiswa::class, 'no_induk', 'no_induk');
    }
}
