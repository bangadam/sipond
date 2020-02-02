<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    protected $table = 'tbl_pelanggaran';

    protected $fillable = ['keterangan', 'skor'];
}
