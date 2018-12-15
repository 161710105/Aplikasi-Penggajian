<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $fillable = ['nomor_induk','nama','bulan','tahun','gaji_pokok','tunjangan_jabatan','tunjangan_keluarga','uang_makan','uang_lembur','persen_pot_pph','persen_pot_jamsostek','jabatan','cabang','departemen','nama_bank','nomor_rekening','rekening_atas_nama','total_gaji'];

    public function Karyawan()
    {
        return $this->belongsTo('App\Karyawan', 'nomor_induk');
    }
}
