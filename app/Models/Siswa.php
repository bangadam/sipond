<?php
namespace App\Models;


use Eloquent as Model;

/**
 * Class Kelas
 * @package App\Models
 * @version February 1, 2020, 5:30 am UTC
 *
 * @property integer gn_kelas
 * @property string nm_kelas
 */
class Siswa extends Model
{

    public $table = 'bio_siswa';
    

    protected $primaryKey = 'no_induk';

    public function perizinan(){
    	return $this->hasMany('App\Models\Perizinan');
    }
}

