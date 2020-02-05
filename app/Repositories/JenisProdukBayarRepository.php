<?php

namespace App\Repositories;

use App\Models\JenisProdukBayar;
use App\Repositories\BaseRepository;

/**
 * Class JenisProdukBayarRepository
 * @package App\Repositories
 * @version February 5, 2020, 3:10 am UTC
*/

class JenisProdukBayarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jenis_produk',
        'nominal'
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
        return JenisProdukBayar::class;
    }
}
