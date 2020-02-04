<?php

namespace App\Repositories;

use App\Models\Pembayaran;
use App\Repositories\BaseRepository;

/**
 * Class PembayaranRepository
 * @package App\Repositories
 * @version February 4, 2020, 1:44 am UTC
*/

class PembayaranRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_induk',
        'id_jenis_bayar',
        'id_produk_bayar',
        'jumlah',
        'catatan'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pembayaran::class;
    }
}
