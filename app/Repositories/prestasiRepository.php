<?php

namespace App\Repositories;

use App\Models\prestasi;
use App\Repositories\BaseRepository;

/**
 * Class prestasiRepository
 * @package App\Repositories
 * @version February 3, 2020, 2:23 pm UTC
*/

class prestasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_prestasi',
        'no_induk',
        'tgl_prestasi',
        'jenis_prestasi',
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
        return prestasi::class;
    }
}
