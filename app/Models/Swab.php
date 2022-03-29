<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swab extends Model
{
    use HasFactory;
    protected $fillable = [
     'nama'
    ,'umur'
    ,'jenis_kelamin'
    ,'alamat'
    ,'nama_tes'
    ,'hasil'
    ,'nama_dokter'
    ];
}
