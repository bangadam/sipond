<?php

namespace App\Repositories;

use App\Models\Tindakan;
use App\Repositories\BaseRepository;

/**
 * Class TindakanRepository
 * @package App\Repositories
 * @version February 15, 2020, 2:53 am UTC
*/

class TindakanRepository extends BaseRepository
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
        return Tindakan::class;
    }
}
