<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'tb_penjualan';
    protected $fillable = [
        'id_penjualan',
        'id_alternatif',
        'tanggal',
        'qty'
    ];
}
