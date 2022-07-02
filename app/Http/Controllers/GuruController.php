<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\GuruModel;
use Carbon\Carbon;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct(){
        $this->Guru = new Guru(); 
        $this->middleware('auth');
    }

    public function index(){
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

        return view ('gtk-guru', compact('guru', 'nomor'));
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

        return redirect()->route('guru')->with('pesan', 'Data Berhasil Ditambahkan!!');
    }

    public function edit($NIG){
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
        // 'Foto_Guru' => $imageName,
    ];

    $this->Guru->editData($NIG, $data);

    return redirect()->route('guru')->with('pesan', 'Data Berhasil diupdate!!');
}

    public function delete($NIG){

        //hapus data
        $this->Guru->deleteData($NIG);
        return redirect()->route('guru')->with('pesan', 'Data Berhasil di Hapus!');
    }

}



