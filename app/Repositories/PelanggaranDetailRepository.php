<?php

namespace App\Repositories;

use App\Models\PelanggaranDetail;
use App\Repositories\BaseRepository;

/**
 * Class PelanggaranDetailRepository
 * @package App\Repositories
 * @version February 2, 2020, 7:44 am UTC
*/

class PelanggaranDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_induk',
        'tindakan',
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
