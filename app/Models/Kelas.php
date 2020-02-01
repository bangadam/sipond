<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Kelas
 * @package App\Models
 * @version February 1, 2020, 5:30 am UTC
 *
 * @property integer gn_kelas
 * @property string nm_kelas
 */
class Kelas extends Model
{
    use SoftDeletes;

    public $table = 'kelas';
    

    protected $dates = ['deleted_at'];


    protected $primaryKey = 'id_kelas';

    public $fillable = [
        'gn_kelas',
        'nm_kelas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_kelas' => 'integer',
        'gn_kelas' => 'integer',
        'nm_kelas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'gn_kelas' => 'required',
        'nm_kelas' => 'required'
    ];

    
}
