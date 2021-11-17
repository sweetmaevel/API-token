<?php

namespace App\Repositories;

use App\Models\customizedcake;
use App\Repositories\BaseRepository;

/**
 * Class customizedcakeRepository
 * @package App\Repositories
 * @version October 27, 2021, 2:58 pm UTC
*/

class customizedcakeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'design',
        'flavor',
        'details',
        'size',
        'prize'
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
        return customizedcake::class;
    }
}
