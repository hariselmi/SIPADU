<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kelas extends Model
{
    protected $guarded = ['id'];
    protected $table = 'kelas';

    public function guru(){
    	return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }

    public function pesertadidik(){
    	// return $this->belongsTo(Pesertadidik::class, 'id', 'kelas_id');
        return $this->hasMany(PesertaDidikModel::class);
    }

    public function addData($data)
    {
        DB::table('kelas')->insert($data);
    }

    public function editData($NIS, $data)
    {
        return DB::table('pesertadidiks')->where('NIS', $NIS)->update($data);

        
    }
    // public function anggota(){
    // 	return $this->hasMany(Kelasanggota::class);
    // }
}
