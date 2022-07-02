<?php

namespace App\Http\Controllers;
use App\Models\Mapel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class MapelController extends Controller
{
    public function __construct(){
        $this->Mapel = new Mapel(); 
        $this->middleware('auth');    
    }
    public function index(){
        $Mapel = DB::table('mapel')->get();
        return view ('mapel', compact('Mapel')); 
    }

    public function insert(Request $request){
        $request->validate([
            'Nama_Mapel' => 'required',
        ],[
            'Nama_Mapel.required' => 'Nama Mata Pelajaran Harus diisi',
        ]);
    
        $data=[
            'Nama_Mapel' => Request()-> Nama_Mapel,
        ];
    
            $this->Mapel->addData($data);
    
            return redirect()->route('mapel')->with('pesan', 'Data Berhasil Ditambahkan!!');

    }
}
