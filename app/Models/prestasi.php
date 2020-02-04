<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class prestasi
 * @package App\Models
 * @version February 3, 2020, 2:22 pm UTC
 *
 * @property integer id_prestasi
 * @property string no_induk
 * @property string tgl_prestasi
 * @property string jenis_prestasi
 * @property string catatan
 */
class prestasi extends Model
{
    use SoftDeletes;

    public $table = 'prestasi';
    public $primaryKey = 'id_prestasi';

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_prestasi',
        'no_induk',
        'tgl_prestasi',
        'jenis_prestasi',
        'catatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_prestasi' => 'integer',
        'no_induk' => 'string',
        'tgl_prestasi' => 'date',
        'jenis_prestasi' => 'string',
        'catatan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_prestasi' => 'required',
        'no_induk' => 'required',
        'tgl_prestasi' => 'required',
        'jenis_prestasi' => 'required',
        'catatan' => 'required'
    ];

    
}
