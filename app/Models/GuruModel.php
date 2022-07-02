<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    protected $table = 'guru';
    // protected $fillable = ['NIG','Nama_Lengkap','Nama_Mandarin', 'Tempat_Lahir', 'Tanggal_Lahir', 'Jenis_Kelamin', 'Agama', 'Mengajar_Kelas', 'Jabatan','Pendidikan', 'No_Whatsapp', 'Alamat',
    //  'Memohon_Ketuhanan', 'Vegetarian', 'Tempat_Memohon_Ketuhanan','Tanggal_Memohon_Ketuhanan', 'Nama_Ayah', 'Agama_Ayah', 'No_HP_Ayah', 'Nama_Ibu', 'Agama_Ibu' ,'No_HP_Ibu', 'Tanggal_Daftar'];
    public function allData()
    {
        return DB::table('guru')->get();
    }

    public function deleteData($NIG)
    {
        DB::table('guru')
            ->where('NIG', $NIG)->delete();
        
    }

}
