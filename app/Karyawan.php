<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = ['nomor_induk','nama','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','status_pernikahan','jumlah_anak','tunjangan_keluarga','alamat','nomor_telepon','pendidikan_terakhir','kode_jabatan','kode_cabang','kode_departemen','gaji_pokok','tanggal_diangkat','tanggal_keluar','nama_bank','nomor_rekening','rekening_atas_nama'];

    public function Jabatan()
    {
        return $this->belongsTo('App\Jabatan', 'kode_jabatan');
    }

    public function Cabang()
    {
        return $this->belongsTo('App\Cabang', 'kode_cabang');
    }

    public function Departemen()
    {
        return $this->belongsTo('App\Departemen', 'kode_departemen');
    }

    public function Cuti()
    {
        return $this->hasMany('App\Cuti', 'nomor_induk');
    }

    public function Lembur()
    {
        return $this->hasMany('App\Lembur', 'nomor_induk');
    }
}
