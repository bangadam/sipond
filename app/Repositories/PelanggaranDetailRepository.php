<?php

namespace App\Repositories;

use App\Models\PelanggaranDetail;
use App\Repositories\BaseRepository;

/**
 * Class PelanggaranDetailRepository
 * @package App\Repositories
 * @version February 15, 2020, 4:00 am UTC
*/

class PelanggaranDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_pelanggaran',
        'no_induk',
        'id_tindakan',
        'catatan',
        'poin',
        'tgl_pelanggaran'
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
        return PelanggaranDetail::class;
    }
}
