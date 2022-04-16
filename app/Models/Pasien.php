<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = [
    'nama'
    ,'nokk'
    ,'umur'
    ,'nohp'
    ,'namakk'
    ,'alamat'
    ];
    public function getKeluhan()
    {
        return $this->HasMany(Keluhan::class,'id_pasien');
    }
    public function getAntrian()
    {
        return $this->HasMany(Antrian::class,'id_pasien');
    }
    public function getTindakan()
    {
        return $this->HasMany(Tindakan::class,'id_pasien');
    }
}
