<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendistribusian extends Model
{
    protected $table = 'pendistribusian';
    protected $fillable = ['id_distribusi', 'id_bantuan', 'id_kebencanaan', 'tanggal', 'nama_distributor', 'tujuan_lokasi'];
}
