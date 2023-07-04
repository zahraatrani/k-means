<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relasi extends Model
{
    protected $table = 'tb_rel_alternatif';
    
	protected $primaryKey = 'ID';
    protected $fillable = [
        'ID',
        'id_alternatif',
        'id_kriteria',
        'nilai'
    ];
}
