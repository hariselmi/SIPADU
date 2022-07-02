<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\PesertaDidikModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function __construct(){
        $this->Kelas = new Kelas();
        $this->PesertaDidikModel = new PesertaDidikModel();
        $this->middleware('auth');    
    }


    public function index(){
        $kelas = Kelas::all();
        $peserta_didik = DB::table('pendaftaranonline')->where('Status', 'AKTIF')->where('Kelas_ID', '0')->get();
        $guru = Guru::OrderBy('Nama_Lengkap', 'asc')->get();
        return view ('kelas', compact('kelas', 'guru', 'peserta_didik')); 
    }

    public function insert(Request $request){
        $request->validate([
            'Nama_Kelas' => 'required',
            'guru_id' => 'required',
        ],[
            'Nama_Kelas.required' => 'Nama Kelas Harus diisi',
            'guru_id.required' => 'Wali Kelas Harus diisi',
        ]);
    
    $data=[
        'Nama_Kelas' => Request()-> Nama_Kelas,
        'guru_id' => Request()-> guru_id,
    ];

    $this->Kelas->addData($data);

    return redirect()->route('kelas')->with('pesan', 'Data Berhasil Ditambahkan!!'); 
    }

    public function tambahanggotakelas(Request $request){
    Kelas::updateOrCreate(
    [
            'id' =>$request->id
    ],
    [
        'pilihkelas' => $request-> Kelas_ID,
    ]
    );
    // $this->Kelas->editData($NIS, $data);

    // return redirect()->route('kelas');
    return response()->json(['success' => 'Nilai ulangan siswa berhasil ditambahkan!']);
}

//Tampilan Akun Guru
public function index_guru(){
    $kelas = Kelas::all();
    $peserta_didik = DB::table('pendaftaranonline')->where('Status', 'AKTIF')->where('Kelas_ID', '0')->get();
    $guru = Guru::OrderBy('Nama_Lengkap', 'asc')->get();
    return view ('guru.kelas_guru', compact('kelas', 'guru', 'peserta_didik')); 
}

}