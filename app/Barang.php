<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'tbl_barang';
    protected $fillable = [
        'id_alternatif',
        'kode_alternatif',
        'nama_alternatif',
        'stock',
        'satuan'
    ];
}
