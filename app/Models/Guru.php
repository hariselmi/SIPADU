<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Guru extends Model
{
    protected $table = 'guru';

    public function allData()
    {
        return DB::table('guru')->get();
    }

    public function deleteData($NIG)
    {
        DB::table('guru')
            ->where('NIG', $NIG)->delete();
        
    }

    public function addData($data)
    {
        DB::table('guru')->insert($data);
    }

    public function detailData($NIG)
    {
        return DB::table('guru')->where('NIG', $NIG)->first();
        
    }

    public function editData($NIG, $data)
    {
        return DB::table('guru')->where('NIG', $NIG)->update($data);
        
    }
}

