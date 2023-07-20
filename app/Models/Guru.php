<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table ="guru";

    protected $fillable = [
        'nama','nipd','alamat','nohp','email','kelas_id'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'kelas_id','id');
    }
}
