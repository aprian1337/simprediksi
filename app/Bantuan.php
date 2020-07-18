<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    protected $table = 'bantuan';
    protected $fillable = ['id_bantuan', 'id_donatur', 'jenis_bantuan', 'jumlah_bantuan', 'satuan'];
}
