<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'tbl_penjualan';
    protected $fillable = [
        'id_penjualan',
        'id_barang',
        'tanggal',
        'qty',
        'satuan'
    ];
}
