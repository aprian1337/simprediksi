<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    protected $table = 'donatur';
    protected $fillable = ['id_donatur', 'nama_donatur', 'alamat', 'email', 'notelpon', 'nama_kontak'];
}
