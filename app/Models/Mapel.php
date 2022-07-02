<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Mapel extends Model
{
    protected $guarded = ['id'];
    protected $table = 'mapel';

    public function addData($data)
    {
        DB::table('mapel')->insert($data);
    }
}
