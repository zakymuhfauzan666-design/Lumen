<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    
    protected $fillable = array('nim', 'nama', 'email', 'noHp', 'kelas', 'alamat', 'status');
    
    public $timestamps = true;
}