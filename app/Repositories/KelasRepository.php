<?php

namespace App\Repositories;

use App\Models\Kelas;
use App\Repositories\BaseRepository;

/**
 * Class KelasRepository
 * @package App\Repositories
 * @version February 1, 2020, 5:30 am UTC
*/

class KelasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'gn_kelas',
        'nm_kelas'
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
        return Kelas::class;
    }
}
