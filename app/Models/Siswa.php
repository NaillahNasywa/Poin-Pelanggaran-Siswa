<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table ="siswa";

    protected $fillable = [
        'nama','nisn','jeniskelamin','alamat','nohp','point','email','kelas_id'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'kelas_id','id');
    }

    public function pelanggaran_siswa()
    {
        return $this->belongsToMany(pelanggaran_siswa::class, 'pelanggaran','siswa_id');
}

// public function pelanggaran()
// {
//     return $this->belongsToMany(pelanggaran::class, 'pelanggaran','siswa_id');
// }
}
