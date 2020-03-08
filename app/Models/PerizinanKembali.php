<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerizinanKembali extends Model
{
    public $table = 'perizinan_kembali';

    public $guarded = [''];

    public $primaryKey = 'id_izin';
}
