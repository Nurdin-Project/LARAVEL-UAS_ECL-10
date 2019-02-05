<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $primaryKey = 'id_kelas';
    
    protected $table = 'table_kelas';
    
    protected $fillable = [
    	'nama_kelas', 'jurusan'
    ];
}
