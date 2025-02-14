<?php

namespace App\Repositories;

use App\Models\Setting;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SettingRepository
 * @package App\Repositories
 * @version November 9, 2019, 11:25 pm UTC
 *
 * @method Setting findWithoutFail($id, $columns = ['*'])
 * @method Setting find($id, $columns = ['*'])
 * @method Setting first($columns = ['*'])
*/
class SettingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomination_start_date',
        'nomination_end_date',
        'voting_start_date',
        'voting_end_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Setting::class;
    }
}
