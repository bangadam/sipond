<?php

namespace App\Repositories;

use App\Models\JenisPrestasi;
use App\Repositories\BaseRepository;

/**
 * Class JenisPrestasiRepository
 * @package App\Repositories
 * @version February 5, 2020, 7:22 am UTC
*/

class JenisPrestasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
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
        return JenisPrestasi::class;
    }
}
