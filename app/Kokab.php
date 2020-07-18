<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kokab extends Model
{
    protected $table = 'kota_kabupaten';
    protected $fillable = ['id_kokab', 'nama_kokab'];
}
