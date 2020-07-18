<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_Korban extends Model
{
    protected $table = 'jenis_korban';
    protected $fillable = ['id_jenis_korban', 'jenis_korban', 'keterangan'];
}
