<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relasi extends Model
{
    protected $table = 'tbl_rel_alternatif';
    
	protected $primaryKey = 'ID';
    protected $fillable = [
        'id',
        'id_alternatif',
        'id_kriteria',
        'nilai'
    ];
}
