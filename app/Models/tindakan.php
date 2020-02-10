<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tindakan
 * @package App\Models
 * @version February 10, 2020, 12:07 pm UTC
 *
 * @property string nama_tindakan
 */
class tindakan extends Model
{
    // use SoftDeletes;

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
