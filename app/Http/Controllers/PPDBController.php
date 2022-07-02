<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Models\PPDBModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class PPDBController extends Controller
{
    public function __construct(){
        $this->PPDBModel = new PPDBModel();
        $this->Guru = new Guru();    
    }

    public function index(){
        $pendaftaran_online = PPDBModel::all();

        //NO_Form | Tahun-NoForm (20220001)
        $tanggals = Carbon::now()->format('Y-m-d');
        $now = Carbon::now();
        $thn = $now->year;
        $cek = PPDBModel::count();
        if($cek== 0){
            $urut= 80001;
            $nomor= $thn.$urut;
        } else{
            $ambil= PPDBModel::all()->last();
            $urut= (int)substr($ambil->No_Form,-5)+1;
            $nomor= $thn.$urut;
        }

        return view ('ppdb', compact('pendaftaran_online', 'nomor'));
    }



    public function insert(Request $request){
        $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'Nama_Lengkap' => 'required',
        'Nama_Mandarin' => 'required',
        'Tempat_Lahir' => 'required',
        'Tanggal_Lahir' => 'required',
        'Jenis_Kelamin' => 'required',
        'Agama' => 'required',
        'Sekolah_Asal' => 'required',
        'Kelas' => 'required',
        'Nama_Ortu_Aktif' => 'required',
        'No_Whatsapp' => 'required',
        // 'invalidCheck' => 'accepted',
    ],[
        'image.required' => 'wajib lampirkan pas foto peserta didik',
        'image.mimes' => 'file wajib jpg, jpeg, png',
        'Nama_Lengkap.required' => 'Nama Lengkap Harus diisi',
        'Nama_Mandarin.required' => 'Nama Mandarin Harus diisi.',
        'Tempat_Lahir.required' => 'Tempat Lahir Harus diisi',
        'Tanggal_Lahir.required' => 'Tanggal Lahir Harus diisi',
        'Jenis_Kelamin.required' => 'Jenis Kelamin Harus diisi',
        'Sekolah_Asal.required' => 'Sekolah Asal Harus diisi',
        'Kelas.required' => 'Kelas Harus diisi',
        'Nama_Ortu_Aktif.required' => 'Wajib Mengisi Nama Salah Satu Orang Tua',
        'No_Whatsapp.required' => 'Wajib Mengisi Nama Salah Satu Nomor Whatsapp Orang Tua',
        'invalidCheck.required' => 'Wajib Mencentang',
    ]);
    
    
    $imageName = Request()->No_Form.'.'.$request->image->extension();  
    $request->image->move(public_path('foto_ppdb'), $imageName);    

    $data=[
        'No_Form' => Request()-> No_Form,
        'Nama_Lengkap' => Request()-> Nama_Lengkap,
        'Nama_Mandarin' => Request()-> Nama_Mandarin,
        'Tempat_Lahir' => Request()-> Tempat_Lahir,
        'Tanggal_Lahir' => Request()-> Tanggal_Lahir,
        'Jenis_Kelamin' => Request()-> Jenis_Kelamin,
        'Agama' => Request()-> Agama,
        'Sekolah_Asal' => Request()-> Sekolah_Asal,
        'Kelas_Asal' => Request()-> Kelas,
        'Alamat' => Request()-> Alamat,
        'foto_siswa' => $imageName,
        'Memohon_Ketuhanan' => Request()-> Memohon_Ketuhanan,
        'Vegetarian' => Request()-> Vegetarian,
        'Tempat_Memohon_Ketuhanan' => Request()-> Tempat_Memohon_Ketuhanan,
        'Tanggal_Memohon_Ketuhanan' => Request()-> Tanggal_Memohon_Ketuhanan,
        'Nama_Ayah' => Request()-> Nama_Ayah,
        'Agama_Ayah' => Request()-> Agama_Ayah,
        'No_HP_Ayah' => Request()-> No_HP_Ayah,
        'Nama_Ibu' => Request()-> Nama_Ibu,
        'Agama_Ibu' => Request()-> Agama_Ibu,
        'No_HP_Ibu' => Request()-> No_HP_Ibu,
        'Nama_Ortu_Aktif' => Request()-> Nama_Ortu_Aktif,
        'No_Whatsapp' => Request()-> No_Whatsapp,
    ];

    $this->PPDBModel->addData($data);
    // return redirect()->route('ppdb')->with('pesan', 'Data Berhasil Ditambahkan!!, Silahkan Hubungi bagian administrasi untuk mandapatkan softfile fomulir');
    return redirect('ppdb/fomulirpdf/{No_Form}');
}

public function fomulirpdf($no_form){
    $pendaftaran_online = PPDBModel::all()->last();

    $path = 'Gambar\Kop_SMMAM.jpg';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $foto = file_get_contents($path);
    $logo = 'data:image/' . $type . ';base64,' . base64_encode($foto);

    $lokasi = 'foto_ppdb/'.$pendaftaran_online->Foto_Siswa;
    $tipe = pathinfo($lokasi, PATHINFO_EXTENSION);
    $jenis = file_get_contents($lokasi);
    $gambar = 'data:image/' . $tipe . ';base64,' . base64_encode($jenis);

    $pdf = PDF::loadView('fomulir_pdf.ppdb_fomulir_pdf', compact('pendaftaran_online', 'logo', 'gambar'))
    ->setPaper('Legal', 'potrait')->setOptions([
    'isHtml5ParserEnabled' => true, 
    'isRemoteEnabled' => false,  ]);    

    $filename = 'Fomulir Pendaftaran-'.$pendaftaran_online->Nama_Lengkap.'.pdf' ;
    return $pdf->stream($filename);
}

//pendaftaran guru online
public function daftarguruonline(){
    $guru = Guru::all();

    $tanggals = Carbon::now()->format('y');
    $now = Carbon::now();
    $thn = $now->year;
    $cek = Guru::count();
    if($cek== 0){
        $urut= 1001;
        $nomor= $tanggals.$urut;
    } else{
        $ambil= Guru::all()->last();
        $urut= (int)substr($ambil->NIG,-4)+1;
        $nomor= $tanggals.$urut;
    }

    return view ('gurupendaftaran', compact('guru', 'nomor'));
}

public function tambahguru(Request $request){
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'Nama_Lengkap' => 'required',
        'Nama_Mandarin' => 'required',
        'Tempat_Lahir' => 'required',
        'Tanggal_Lahir' => 'required',
        'Jenis_Kelamin' => 'required',
        'Agama' => 'required',
        'No_Whatsapp' => 'required',
        // 'invalidCheck' => 'accepted',
    ],[
        'image.required' => 'wajib lampirkan pas foto peserta didik',
        'image.mimes' => 'file wajib jpg, jpeg, png',
        'Nama_Lengkap.required' => 'Nama Lengkap Harus diisi',
        'Nama_Mandarin.required' => 'Nama Mandarin Harus diisi.',
        'Tempat_Lahir.required' => 'Tempat Lahir Harus diisi',
        'Tanggal_Lahir.required' => 'Tanggal Lahir Harus diisi',
        'Jenis_Kelamin.required' => 'Jenis Kelamin Harus diisi',
        'No_Whatsapp.required' => 'Wajib Mengisi Nama Salah Satu Nomor Whatsapp Orang Tua',
    ]);


$imageName = Request()->No_Form.'.'.$request->image->extension();  
$request->image->move(public_path('foto_guru'), $imageName);    

$data=[
    'NIG' => Request()-> NIG,
    'Nama_Lengkap' => Request()-> Nama_Lengkap,
    'Nama_Mandarin' => Request()-> Nama_Mandarin,
    'Tempat_Lahir' => Request()-> Tempat_Lahir,
    'Tanggal_Lahir' => Request()-> Tanggal_Lahir,
    'Jenis_Kelamin' => Request()-> Jenis_Kelamin,
    'Agama' => Request()-> Agama,
    'Status' => Request()-> Status,
    'No_Whatsapp' => Request()-> No_Whatsapp,
    'Alamat' => Request()-> Alamat,
    'Memohon_Ketuhanan' => Request()-> Memohon_Ketuhanan,
    'Vegetarian' => Request()-> Vegetarian,
    'Tempat_Memohon_Ketuhanan' => Request()-> Tempat_Memohon_Ketuhanan,
    'Tanggal_Memohon_Ketuhanan' => Request()-> Tanggal_Memohon_Ketuhanan,
    'Foto_Guru' => $imageName,
    
];

$this->Guru->addData($data);
        return redirect()->route('daftarguru/daftar')->with('pesan', 'Data Berhasil Ditambahkan!!');
}
}