<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Korban extends Model
{
    protected $table = 'korban';
    protected $fillable = ['id_korban', 'id_kebencanaan', 'nama', 'jenis_korban'];
}
