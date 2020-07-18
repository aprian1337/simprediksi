<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemulihan extends Model
{
    protected $table = 'pemulihan';
    protected $fillable = ['id_pemulihan', 'id_kebencanaan', 'tanggal_mulai', 'tanggal_selesai', 'tindak_lanjut', 'keterangan'];
}
