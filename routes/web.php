<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranOnlineController;
use App\Http\Controllers\PesertaDidikController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\MapelController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sekolah', function () {
    return view('sekolah');
    });

//Pendaftaran Online
Route::get('/pendaftaranonline', [PendaftaranOnlineController::class,'index'])->name('pendaftaranonline');
Route::get('/pendaftaranonline/detailfomulir/{No_Form}', [PendaftaranOnlineController::class,'detail']);
Route::get('/pendaftaranonline/delete/{id}', [PendaftaranOnlineController::class,'delete']);
Route::get('/pendaftaranonline/fomulirpdf/{No_Form}', [PendaftaranOnlineController::class,'fomulirpdf']);
Route::delete('/pendaftaranonline/selected-siswa',[PendaftaranOnlineController::class,'deleteCheckedSiswa'])->name('siswa.deleteSelected');
Route::get('/pendaftaranonline/status/{id}', [PendaftaranOnlineController::class,'status']);

//Peserta Didik
Route::get('/pesertadidik', [PesertaDidikController::class,'index'])->name('pesertadidik');
Route::POST('/pesertadidik/insert', [PesertaDidikController::class,'insert']);
Route::get('/pesertadidik/delete/{NIS}', [PesertaDidikController::class,'delete']);
Route::put('/pesertadidik/edit/{NIS}', [PesertaDidikController::class,'edit']);
Route::get('/pesertadidik/fomulirpdf/{NIS}', [PesertaDidikController::class,'fomulirpdf']);

//Guru
Route::get('/guru', [GuruController::class,'index'])->name('guru');
Route::POST('/guru/insert', [GuruController::class,'insert']);
Route::get('/guru/delete/{NIG}', [GuruController::class,'delete']);
Route::put('/guru/edit/{NIG}', [GuruController::class,'edit']);
Route::get('/guru/daftar', [PPDBController::class,'daftarguruonline'])->name('daftarguru/daftar');
Route::POST('/guru/tambahguru', [PPDBController::class,'tambahguru']);


//Admin
// Route::get('/gtk-admin', function () {
//     return view('gtk-admin');
// });
Route::get('/gtk-admin',[AdminController::class,'generatePDF']);


//Kelas
// Route::get('/kelas', [KelasnguruController::class,'index']);
Route::get('/kelas', [KelasController::class,'index'])->name('kelas');
Route::POST('/kelas/insert', [KelasController::class,'insert']);
Route::PUT('/kelas/edit', [KelasController::class,'tambahanggotakelas']);



// Route::get('/kelas', function(Kelasanggota $anggota)){
//     return view()
// };


// Route::POST('/kelas/insert', [KelasnguruController::class,'insert']);
// // //Kelas Anggota
// // Route::get('/kelas/anggota', [KelasanggotaController::class,'index']);
Route::get('/coba', [CobaController::class,'index']);

//Guru
Route::controller(PesertaDidikController::class)->group(function(){
    Route::get('gtk-guru', 'index');
    Route::post('gtk-guru', 'store')->name('image.store');
});

//Data Mapel
Route::get('/mapel', [MapelController::class,'index'])->name('mapel');
Route::POST('/mapel/insert', [MapelController::class,'insert']);

//PPDB Online
Route::controller(PPDBController::class)->group(function(){
    Route::get('/ppdb', [PPDBController::class,'index'])->name('ppdb');
    Route::POST('/ppdb/insert', [PPDBController::class,'insert']);
});
Route::get('/ppdb/fomulirpdf/{No_Form}', [PPDBController::class,'fomulirpdf']);

//Rapor
Route::get('/rapor', [RaporController::class,'index'])->name('rapor');
Route::get('/rapor-kelas/{kelas_id}', [RaporController::class,'kelas'])->name('rapor.kelas');
Route::post('/rapor-get-nilai', [RaporController::class,'get_nilai'])->name('rapor.get_nilai');
Route::get('/rapor-pdf-nilai/{rapor_id}', [RaporController::class,'pdf_nilai'])->name('rapor.pdf_nilai');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Tampilan akun Guru
Route::get('/guru_kelas', [KelasController::class,'index_guru'])->name('kelas');
// Route::get('/guru_nilai', [KelasController::class,'index_guru'])->name('kelas');
Route::get('/guru_nilai', function () {
    return view('guru.nilai_guru');
    });

Route::get('/guru_absensi', function () {
    return view('guru.absensi_guru');
    });


