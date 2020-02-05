<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JenisProdukBayar
 * @package App\Models
 * @version February 5, 2020, 3:10 am UTC
 *
 * @property string jenis_produk
 * @property number nominal
 */
class JenisProdukBayar extends Model
{

    public $table = 'jenis_produk_bayar';

    public $timestamps = false;

    public $primaryKey = 'id_jenis_produk';



    public $fillable = [
        'jenis_produk',
        'nominal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jenis_produk' => 'string',
        'nominal' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jenis_produk' => 'required',
        'nominal' => 'required'
    ];
}
