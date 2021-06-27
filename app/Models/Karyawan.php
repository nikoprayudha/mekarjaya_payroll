<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_karyawan';
    protected $primaryKey = 'id_karyawan';

    protected $fillable = [
        'nama','tgl_lahir','jenis_kelamin','id_divisi','id_jabatan','tgl_masuk','foto'
    ];

    protected $hidden = [
        
    ];

}
