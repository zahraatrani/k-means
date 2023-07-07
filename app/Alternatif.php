<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = 'tbl_barang';
    protected $fillable = [
        'id_alternatif',
        'nama_alternatif',
        'keterangan',
    ];
}
