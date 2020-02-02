<?php

namespace App\Repositories;

use App\Models\Perizinan;
use App\Repositories\BaseRepository;

/**
 * Class PerizinanRepository
 * @package App\Repositories
 * @version February 2, 2020, 12:21 pm UTC
*/

class PerizinanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_induk',
        'tgl_izin',
        'tgl_kembali',
        'penjemput',
        'catatan',
        'status_izin'
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
        return Perizinan::class;
    }
}
