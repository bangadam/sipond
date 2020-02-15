<?php

namespace App\Models;

use Eloquent as Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tindakan
 * @package App\Models
 * @version February 15, 2020, 2:53 am UTC
 *
 * @property string nama_tindakan
 */
class Tindakan extends Model
{

    public $table = 'tindakan';

    public $timestamps = false;
    


    public $fillable = [
        'nama_tindakan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_tindakan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_tindakan' => 'required'
    ];

    
}
