<?php

namespace App\Repositories;

use App\Models\Kesehatan;
use App\Repositories\BaseRepository;

/**
 * Class KesehatanRepository
 * @package App\Repositories
 * @version February 2, 2020, 3:12 am UTC
*/

class KesehatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_induk',
        'tgl_mulai',
        'tgl_selesai',
        'keluhan',
        'obat',
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
        return Kesehatan::class;
    }
}
