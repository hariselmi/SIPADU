<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesertaDidikModel;
use Carbon\Carbon;
use App\Models\KelasModel;
use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade\Pdf;

class PesertaDidikController extends Controller
{
    public function __construct(){
        $this->PesertaDidikModel = new PesertaDidikModel(); 
        $this->middleware('auth');    
    }

    public function index(){
        $peserta_didik = DB::table('pendaftaranonline')->where('Status', 'AKTIF')->get();
        // $data = [ 'peserta_didik' => $this->PesertaDidikModel->datatertentu()]; 


        //NO_Form | Tahun-NoForm (220001)
        $tanggals = Carbon::now()->format('y');
        $now = Carbon::now();
        $thn = $now->year;
        $cek = PesertaDidikModel::count();
        if($cek== 0){
            $urut= 80001;
            $nomor= $tanggals.$urut;
        } else{
            $ambil= PesertaDidikModel::all()->last();
            $urut= (int)substr($ambil->NIS,-5)+1;
            $nomor= $tanggals.$urut;
        }
        
        return view ('datapesertadidik', compact('peserta_didik', 'nomor'));
        // dd($tanggals);
    }

    // public function edit($NIS){

    //     // if (!this->PesertaDidikModel->detailData($NIS)){
    //     //     abort(404);
    //     // }

    //     $data = [
    //         'data' => $this->PesertaDidikModel->detailData($NIS),
    //     ];

    //     $peserta_didik = [
    //         'peserta_didik' => $this->PesertaDidikModel->allData(),
    //     ];
    //     return view('editpesertadidik', $data, $peserta_didik);
    // }

    public function delete($NIS){

        //hapus data
        $this->PesertaDidikModel->deleteData($NIS);
        return redirect()->route('pesertadidik')->with('pesan', 'Data Berhasil di Hapus!');
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
    $request->image->move(public_path('foto_siswa'), $imageName);    

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

        $this->PesertaDidikModel->addData($data);

        return redirect()->route('pesertadidik')->with('pesan', 'Data Berhasil Ditambahkan!!');
    }

    public function edit($NIS){
        Request()->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ],[
        'Nama_Lengkap.required' => 'wajib menulis nama lengkap',
    ]);

    
    // jika validasi tidak maka lakukan simpan data
    // upload gambar
    // $file = Request()-> Foto_Siswa;
    // $fileName = Request()->no_form.'.'.$file->extension();
    // $file->move(public_path('foto_siswa'), $fileName);

    // $imageName = Request()->NIS.'.'.Request()->image->extension();  
    // Request()->image->move(public_path('foto_siswa'), $imageName);    


    $data=[
        'Nama_Lengkap' => Request()-> Nama_Lengkap,
        'Nama_Mandarin' => Request()-> Nama_Mandarin,
        'Tempat_Lahir' => Request()-> Tempat_Lahir,
        'Tanggal_Lahir' => Request()-> Tanggal_Lahir,
        'Jenis_Kelamin' => Request()-> Jenis_Kelamin,
        'Agama' => Request()-> Agama,
        'Sekolah_Asal' => Request()-> Sekolah_Asal,
        // 'Kelas_ID' => Request()-> Kelas,
        'Alamat' => Request()-> Alamat,
        // 'foto_siswa' => $imageName,
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
        'No_Whatsapp' => Request()-> No_Whatsapp,
    ];

    $this->PesertaDidikModel->editData($NIS, $data);

    return redirect()->route('pesertadidik')->with('pesan', 'Data Berhasil diupdate!!');
}

    public function fomulirpdf($nis){
    $peserta_didik = $this->PesertaDidikModel->detailData($nis);
    
    $path = 'Gambar\Kop_SMMAM.jpg';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $foto = file_get_contents($path);
    $logo = 'data:image/' . $type . ';base64,' . base64_encode($foto);

    $lokasi = 'foto_ppdb/'.$peserta_didik->Foto_Siswa;
    $tipe = pathinfo($lokasi, PATHINFO_EXTENSION);
    $jenis = file_get_contents($lokasi);
    $gambar = 'data:image/' . $tipe . ';base64,' . base64_encode($jenis);

    $pdf = PDF::loadView('fomulir_pdf/siswa_fomulir_pdf', compact('peserta_didik', 'logo', 'gambar'))
    ->setPaper('Legal', 'potrait')->setOptions([
    'isHtml5ParserEnabled' => true, 
    'isRemoteEnabled' => false,  ]);    

    $filename = 'Fomulir Pendaftaran-'.$peserta_didik->Nama_Lengkap.'.pdf' ;
    return $pdf->stream($filename);
}

}
