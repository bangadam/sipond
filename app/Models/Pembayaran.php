<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Pembayaran
 * @package App\Models
 * @version February 4, 2020, 1:44 am UTC
 *
 * @property string no_induk
 * @property integer id_jenis_bayar
 * @property integer id_produk_bayar
 * @property integer jumlah
 * @property string catatan
 */
class Pembayaran extends Model
{
    public $table = 'pembayaran';

    public $primaryKey = 'no_nota';

    public $timestamps = false;

    public $fillable = [
        'no_induk',
        'id_jenis_bayar',
        'id_produk_bayar',
        'jumlah',
        'catatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'no_induk' => 'string',
        'id_jenis_bayar' => 'integer',
        'id_produk_bayar' => 'integer',
        'jumlah' => 'integer',
        'catatan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_induk' => 'required',
        'id_jenis_bayar' => 'required',
        'id_produk_bayar' => 'required',
        'jumlah' => 'required',
        'catatan' => 'required'
    ];
    public function bio_siswa()
    {
        return $this->hasOne(BioSiswa::class, 'no_induk', 'no_induk');
    }
    public function jenis_bayar()
    {
        return $this->hasOne(JenisBayar::class, 'id_jenis', 'id_jenis_bayar');
    }

    public function jenis_produk_bayar()
    {
        return $this->hasOne(JenisProdukBayar::class, 'id_jenis_produk','id_produk_bayar');
    }
}
