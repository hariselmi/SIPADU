<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PPDBModel extends Model
{
    protected $table = 'pendaftaranonline';
    public function addData($data)
    {
        DB::table('pendaftaranonline')->insert($data);
    }
}
