<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KelasModel extends Model
{
    protected $table= 'tb_kelas';
    
    public function allData()
    {
        return DB::table('tb_kelas')->get();
    }


    
}
