<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pelanggaran
 * @package App\Models
 * @version February 2, 2020, 7:52 am UTC
 *
 * @property string keterangan
 * @property integer skor
 */
class Pelanggaran extends Model
{

    public $table = 'pelanggaran';

    protected $primaryKey = 'id_pelanggaran';

    public $incrementing = false;

    public $timestamps = false;

    public $fillable = [
        'id_pelanggaran',
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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            try {
                $model->id_pelanggaran = mt_rand(0, 99999999); // better than rand();
            } catch (UnsatisfiedDependencyException $e) {
                abort(500, $e->getMessage());
            }
        });
    }
}
