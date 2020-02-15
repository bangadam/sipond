<?php

namespace App\Repositories;

use App\Models\Pelanggaran;
use App\Repositories\BaseRepository;

/**
 * Class PelanggaranRepository
 * @package App\Repositories
 * @version February 15, 2020, 2:52 am UTC
*/

class PelanggaranRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_pelanggaran',
        'keterangan',
        'skor'
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
        return Pelanggaran::class;
    }
}
