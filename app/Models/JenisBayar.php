<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class JenisBayar
 * @package App\Models
 * @version February 4, 2020, 3:28 am UTC
 *
 * @property string jenis_bayar
 */
class JenisBayar extends Model
{

    public $table = 'jenis_bayar';
    public $timestamps=false;
    public $primaryKey='id_jenis';




    public $fillable = [
        'jenis_bayar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jenis_bayar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jenis_bayar' => 'required'
    ];

    
}
