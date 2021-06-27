<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Divisi extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_divisi';
    protected $primaryKey = 'id_divisi';

    
    protected $fillable = [
        'nama_divisi'
    ];

    protected $hidden = [
        
    ];
}
