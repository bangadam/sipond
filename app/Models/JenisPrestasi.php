<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JenisPrestasi
 * @package App\Models
 * @version February 5, 2020, 7:22 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection bioSiswas
 * @property string nama
 */
class JenisPrestasi extends Model
{
    public $table = 'jenis_prestasi';

    public $primaryKey = 'id';

    public $timestamps = false;

    public $fillable = [
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required'
    ];
}
