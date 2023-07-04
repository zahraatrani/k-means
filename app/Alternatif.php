<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = 'tb_alternatif';
    protected $fillable = [
        'id_alternatif',
        'kode_alternatif',
        'nama_alternatif',
        'keterangan',
    
    ];
}
