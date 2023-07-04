<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'tb_kriteria';
    protected $fillable = [
        'id_kriteria',
        'kode_kriteria',
        'nama_kriteria'
    ];
}
