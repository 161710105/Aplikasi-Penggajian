<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected $fillable = ['kode_cabang','nama_cabang','uang_makan'];

    public function Karyawan()
    {
    	return $this->hasMany('App\Karyawan', 'kode_cabang');
    }
}
