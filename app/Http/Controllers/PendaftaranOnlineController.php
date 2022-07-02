<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranOnlineModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use Dompdf\Options;

class PendaftaranOnlineController extends Controller
{
    public function __construct(){
        $this->PendaftaranOnlineModel = new PendaftaranOnlineModel(); 
        $this->middleware('auth');    
    }

    public function index(){
        $pendaftaran_online = PendaftaranOnlineModel::all();
        return view ('pendaftaranonline', compact('pendaftaran_online'));
    }

    public function add($no_form){
        $data = [
            'pendaftaran_online' => $this->PendaftaranOnlineModel->detailData($no_form),
        ];
        return view('detail_fomulir', $data);
    }

    public function detail($no_form){
        $pendaftaran_online = $this->PendaftaranOnlineModel->detailData($no_form);

        $path = 'Gambar\Kop_SMMAM.jpg';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $foto = file_get_contents($path);
        $logo = 'data:image/' . $type . ';base64,' . base64_encode($foto);

        $lokasi = 'foto_ppdb/'.$pendaftaran_online->Foto_Siswa;
        $tipe = pathinfo($lokasi, PATHINFO_EXTENSION);
        $jenis = file_get_contents($lokasi);
        $gambar = 'data:image/' . $tipe . ';base64,' . base64_encode($jenis);

        return view('fomulir_pdf.ppdb_fomulir_pdf', compact('pendaftaran_online', 'logo', 'gambar'));
    }

    public function delete($id){

        //hapus data

        // $foto= $this->PendaftaranOnlineModel->detailData($id);
        // if($foto->Foto_Siswa <> ""){
        //     unlink(public_path('foto_ppdb'.'/'. $foto->Foto_Siswa));
        // }


        $this->PendaftaranOnlineModel->deleteData($id);
        return redirect()->route('pendaftaranonline')->with('pesan', 'Data Berhasil di Hapus!');
        
    }

    public function fomulirpdf($no_form){
        $pendaftaran_online = $this->PendaftaranOnlineModel->detailData($no_form);

        $path = 'Gambar\Kop_SMMAM.jpg';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $foto = file_get_contents($path);
        $logo = 'data:image/' . $type . ';base64,' . base64_encode($foto);

        $lokasi = 'foto_ppdb/'.$pendaftaran_online->Foto_Siswa;
        $tipe = pathinfo($lokasi, PATHINFO_EXTENSION);
        $jenis = file_get_contents($lokasi);
        $gambar = 'data:image/' . $tipe . ';base64,' . base64_encode($jenis);
        // $rawHtml = view('fomulir_pdf', compact('pendaftaran_online', 'logo'))->render();

        // // instantiate and use the dompdf class
        
        // $Options = new Options();
        // // $options = $dompdf->getOptions();
        // $Options -> set('chroot', realpath(''));
        // $dompdf = new Dompdf($Options);
        // // $dompdf->setOptions($options);
        // $dompdf->loadHtml($rawHtml);


        // // (Optional) Setup the paper size and orientation
        // $dompdf->setPaper('A4', 'potrait');

        // // Render the HTML as PDF
        // $dompdf->render();
        // $dompdf->stream();

        $pdf = PDF::loadView('fomulir_pdf/ppdb_fomulir_pdf', compact('pendaftaran_online', 'logo', 'gambar'))
        ->setPaper('Legal', 'potrait')->setOptions([
        'isHtml5ParserEnabled' => true, 
        'isRemoteEnabled' => false,  ]);
        
        $filename = 'Fomulir Pendaftaran-'.$pendaftaran_online->Nama_Lengkap.'.pdf' ;
    return $pdf->stream($filename);

    }

    public function deleteCheckedSiswa(Request $request){
        $ids = $request->ids;
        PendaftaranOnlineModel::whereIn('id', $ids)->delete();
        return response()->json(['success'=>"Calon Peserta Didik Telah diHapus"]);
    }

    public function status($id){
        $data = DB::table('pendaftaranonline')->where('id', $id)->first();

        $status_sekarang = $data->Status;
        $NIS_Sekarang = $data->NIS;

        //NIS | Tahun-NoForm (2260001)
        $tanggals = Carbon::now()->format('y');
        $now = Carbon::now();
        $thn = $now->year;
        $cek = PendaftaranOnlineModel::count();
        if($cek== 0){
            $urut= 60001;
            $nomor= $tanggals.$urut;
        } else{
            $ambil= PendaftaranOnlineModel::all()->last();
            $urut= (int)substr($ambil->NIS,-5)+1;
            $nomor= $tanggals.$urut;
        }

        //beri NIS pada Peserta didik baru
        if($NIS_Sekarang == 0){
            DB::table('pendaftaranonline')->where('id', $id)->update([
                'NIS' => $nomor
            ]);
        }
        
        //Aktifkan Peserta didik
        if($status_sekarang == 'AKTIF'){
            DB::table('pendaftaranonline')->where('id', $id)->update([
                'Status' =>0
            ]);
        }else{
            DB::table('pendaftaranonline')->where('id', $id)->update([
                'Status' =>'AKTIF'
            ]);
        }

        $Siswa='Peserta Didik '.$data->Nama_Lengkap. ' Telah di-Aktifkan';
        return redirect()->route('pendaftaranonline')->with('pesan', $Siswa );
    }

//     public function cetak_pdf()
//     {
//     	$pendaftaran_online = PendaftaranOnlineModel::all();
//     	$pdf = PDF::loadView('pdfpendaftaranonline', $pendaftaran_online)->setPaper('A4', 'potrait') -> setOptions(['font' => 'arial']);
//     	return $pdf->download('laporan-pegawai-pdf');
//     }
}
