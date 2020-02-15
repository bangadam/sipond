<?php

namespace App\Models;

use Eloquent as Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pelanggaran
 * @package App\Models
 * @version February 15, 2020, 2:52 am UTC
 *
 * @property string keterangan
 * @property integer skor
 */
class Pelanggaran extends Model
{

    public $table = 'pelanggaran';

    protected $primaryKey = 'id_pelanggaran';

    public $timestamps = false;



    public $fillable = [
        'keterangan',
        'skor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_pelanggaran' => 'integer',
        'keterangan' => 'string',
        'skor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'keterangan' => 'required',
        'skor' => 'required'
    ];

    
}
