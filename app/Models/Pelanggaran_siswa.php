<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran_siswa extends Model
{
    use HasFactory;

    protected $table ="pelanggaran_siswa";

    protected $fillable = [
        'siswa_id','pelanggaran_id'
    ];

    public function pelanggaran()
    {
        return $this->belongsTo(Pelanggaran::class, 'pelanggaran_id','id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id','id');
    }

    public function pelanggaran_siswa()
    {
        return $this->belongsTo(Pelanggaran_siswa::class, 'pelanggaran_id','siswa_id');
    }
}