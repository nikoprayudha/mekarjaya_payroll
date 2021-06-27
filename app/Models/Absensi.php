<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absensi extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_absensi';
    protected $primaryKey = 'id_absensi';

    
    protected $fillable = [
        'id_karyawan','jml_kerja','jml_sakit','jml_izin','jml_alfa','jml_cuti'
    ];

    protected $hidden = [
        
    ];
}
