<?php

namespace App\Repositories;

use App\Models\JenisBayar;
use App\Repositories\BaseRepository;

/**
 * Class JenisBayarRepository
 * @package App\Repositories
 * @version February 4, 2020, 3:28 am UTC
*/

class JenisBayarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jenis_bayar'
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
        return JenisBayar::class;
    }
}
