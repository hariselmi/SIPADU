<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\PesertaDidikModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Get_field;

class RaporController extends Controller
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
        $tahun_ajaran = DB::table('tahun_pelajaran')->get();
        return view ('raporkelas', compact('kelas', 'guru', 'peserta_didik','tahun_ajaran')); 
    }

    public function kelas(Request $request){

        $kelas = DB::table('kelas')->where('id', $request->kelas_id)->first();
        $tahun_ajaran = DB::table('tahun_pelajaran')->get();
        $jumlah_siswa = DB::table('pendaftaranonline')->where('kelas_id', $request->kelas_id)->where('Status', 'AKTIF')->count();
        return view ('raporsiswa.rapor', compact('kelas','tahun_ajaran','jumlah_siswa')); 
    }

    public function get_nilai(Request $request){


        $nilai = DB::table('rapor')->where('kelas_id', $request->kelas_id)->where('tahun_pelajaran_id', $request->tahun_pelajaran_id)->get();
        
        if(count($nilai) == 0)
        {
                $peserta_didik = DB::table('pendaftaranonline')->where('Status', 'AKTIF')->where('Kelas_ID', $request->kelas_id)->get();
                return view ('raporsiswa.isinilai', compact('peserta_didik')); 

        }else{
                return view ('raporsiswa.nilai', compact('nilai')); 
        }



    }

    public function pdf_nilai(Request $request){

        $nilai = DB::table('rapor')->where('kelas_id', $request->kelas_id)->where('tahun_pelajaran_id', $request->tahun_pelajaran_id)->get();
        return view ('raporsiswa.nilai', compact('nilai')); 

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