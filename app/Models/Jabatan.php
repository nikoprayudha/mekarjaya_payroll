<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jabatan extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_jabatan';
    protected $primaryKey = 'id_jabatan';

    
    protected $fillable = [
        'nama_jabatan','gaji_pokok','tunjangan'
    ];

    protected $hidden = [
        
    ];
}
