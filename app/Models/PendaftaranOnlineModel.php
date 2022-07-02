<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PendaftaranOnlineModel extends Model
{
   protected $table = 'pendaftaranonline';

   public function allData()
   {
      return DB::table('pendaftaranonline')->get();
   }

   public function detailData($no_form)
   {
      return DB::table('pendaftaranonline')->where('No_Form', $no_form)->first();
      
   }

   public function deleteData($id)
   {
      DB::table('pendaftaranonline')
         ->where('id', $id)->delete();
      
   }

   
}
