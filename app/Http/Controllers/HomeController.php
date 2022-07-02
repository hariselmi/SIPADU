<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\PendaftaranOnlineModel;
use App\Models\PesertaDidikModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->PesertaDidikModel = new PesertaDidikModel();
        $this->Kelas = new Kelas(); 
        $this->Guru = new Guru();
        $this->PendaftaranOnlineModel = new PendaftaranOnlineModel();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $peserta_didik = PesertaDidikModel::all();
        $kelas = Kelas::all();
        $guru = Guru::all();
        $pendaftaran_online = PendaftaranOnlineModel::all();
        return view ('dashboard', compact('peserta_didik','guru','kelas','pendaftaran_online'));
    }
}
