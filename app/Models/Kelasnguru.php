<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Kelasnguru extends Model
{
    protected $table = 'tb_kelas';

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'NIG_Guru', 'NIG');
    }

    public function kelasanggota()
    {
        return $this->hasMany(kelasanggota::class, 'ID_Kelas', 'Kelas_ID');
    }

    // public function addData($data)
    // {
    //     DB::table('tb_kelas')->insert($data);
    // }

}
