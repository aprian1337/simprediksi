<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kebencanaan extends Model
{
    protected $table = 'kebencanaan';
    protected $fillable = ['id_kebencanaan', 'id_kokab', 'id_kecamatan', 'tanggal_kejadian', 'kekuatan_gempa', 'jenis_kerusakan', 'jumlah_kerusakan', 'keterangan'];
}
