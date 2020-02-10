<?php

namespace App\Repositories;

use App\Models\tindakan;
use App\Repositories\BaseRepository;

/**
 * Class tindakanRepository
 * @package App\Repositories
 * @version February 10, 2020, 12:07 pm UTC
*/

class tindakanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_tindakan'
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
        return tindakan::class;
    }
}
