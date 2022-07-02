<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PesertaDidikModel extends Model
{
    protected $table = 'pendaftaranonline';

    public function allData()
    {
        return DB::table('pendaftaranonline')->get();
    }

    public function addData($data)
    {
        DB::table('pendaftaranonline')->insert($data);
    }

    public function deleteData($NIS)
    {
        DB::table('pendaftaranonline')
            ->where('NIS', $NIS)->delete();
        
    }

    public function detailData($NIS)
    {
        return DB::table('pendaftaranonline')->where('NIS', $NIS)->first();
        
    }

    public function editData($NIS, $data)
    {
        return DB::table('pendaftaranonline')->where('NIS', $NIS)->update($data);
    }

    public function datatertentu()
    {
        return DB::table('pendaftaranonline')->where('Status', 'AKTIF')->get();
        
    }

    public function kelas(){
    	return $this->belongsTo(Pesertadidik::class, 'kelas_id', 'id');
    }
}
