@extends('layout.template')
@section('title','Pendaftaran Online')

@section('content')
    <div class="container">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <img src="{{url('Gambar/Kop_SMMAM.png')}}" class="rounded mx-auto d-block" style="width: 3000px;" />
          <div class="col-12  text-center">
            <h4 class="page-header">              
              FOMULIR PENDAFTARAN PESERTA DIDIK BARU<br>
              SEKOLAH MINGGU MANDARIN ANAK MAITREYA <br>
              天恩彌勒儿童青少年班
            </h4>
          </div>
          <!-- /.col -->
        </div>
        <div class="container">
          <table class="table table-borderless text-center">
            
            <thead>
              <td class="table-primary font-weight-bold">No Pendaftaran</td>
            </thead>
            <tbody>
            <tr>
              <td class="table-light col-3"style="color: #ff0800">{{$pendaftaran_online->No_Form}}</td>
              <td class=" col-6"></td>
              <td class="col-3"> <img src="{{url('foto_ppdb/'.$pendaftaran_online->Foto_Siswa)}}" width="150px"> </td>
            </tr>
            </tbody>
          </table>
        
      </div>

    
        <section class="mt-2" style="background-color: #cfcfcf;">
          <h4 class="text-center py-1 font-weight-bold" style="color: #800080;">DATA RINCIAN PESERTA DIDIK</h4>
        <h5 class="py-1 ps-2 font-weight-bold" style="background-color: #00ff00;">DATA PRIBADI</h5>
        </section>
        <!-- Table row -->

        <div class="row">
          <div class="col-12 mt-3">
            <table class="table table-border">
              <tbody>
              <tr>
                <td width="300px">Nama Indonesia</td>
                <td width="30px">:</td>
                <td  colspan="3">{{$pendaftaran_online->Nama_Lengkap}}</td>

              </tr>
              <tr>
                <td>Nama Mandarin</td>
                <td width="30px">:</td>
                <td  colspan="3">{{$pendaftaran_online->Nama_Mandarin}}</td>
              </tr>

              <tr>
                <td>Tempat Lahir</td>
                <td width="30px">:</td>
                <td>{{$pendaftaran_online->Tempat_Lahir}}</td>
                <td>Tanggal Lahir</td>
                <td width="30px">:</td>
                <td>{{$pendaftaran_online->Tanggal_Lahir}}</td>
              </tr>

              <tr>
                <td>Jenis Kelamin</td>
                <td width="30px">:</td>
                <td>{{$pendaftaran_online->Jenis_Kelamin}}</td>
                <td>Agama</td>
                <td width="30px">:</td>
                <td>{{$pendaftaran_online->Agama}}</td>
              </tr>

              <tr>
                <td colspan="1">Alamat Sekarang</td>
                <td width="30px">:</td>
                <td colspan="3">{{$pendaftaran_online->Alamat}}</td>
              </tr>
              </tbody>
            </table>
          
            <section class="mt-2">
            <h5 class="py-1 ps-2 font-weight-bold" style="background-color: #00ff00;">KHUSUS DIISI UMAT BUDDHA MAITREYA</h5>
            </section>

            <table class="table table-border">
              <tbody>
              <tr>
                <td>Tempat Memohon Ketuhanan</td>
                <td width="30px">:</td>
                <td  colspan="3">{{$pendaftaran_online->Tempat_Memohon_Ketuhanan}}</td>

              </tr>
              <tr>
                <td width="300px">Tanggal Memohon Ketuhanan</td>
                <td width="30px">:</td>
                <td  colspan="3">{{$pendaftaran_online->Tanggal_Memohon_Ketuhanan}}</td>
              </tr>

              <tr>
                <td>Apakah Sudah Bervegetarian</td>
                <td width="30px">:</td>
                <td>{{$pendaftaran_online->Vegetarian}}</td>
              </tr>
            </table>
            
            <section class="mt-2" style="background-color: #cfcfcf;">
              <h4 class="text-center py-2 font-weight-bold" style="color: #800080;">DATA ORANG TUA</h4>
            </section>
          
            <table class="table table-border">
              <thead>
                <td style="background-color:rgb(31, 154, 255)" class="font-weight-bold">DATA</td>
                <td style="background-color:green" class="font-weight-bold">AYAH</td>
                <td style="background-color:yellow" class="font-weight-bold">IBU</td>
              </thead>
              <tbody>

              <tr>
                <td width="350px">Nama Lengkap</td>
                <td width="350px">{{$pendaftaran_online->Nama_Ayah}}</td>
                <td width="350px">{{$pendaftaran_online->Nama_Ibu}}</td>
              </tr>

              <tr>
                <td>Nomor HP (WA)</td>
                <td>{{$pendaftaran_online->No_HP_Ayah}}</td>
                <td>{{$pendaftaran_online->No_HP_Ibu}}</td>
              </tr>

              <tr>
                <td>Agama</td>
                <td>{{$pendaftaran_online->Agama_Ayah}}</td>
                <td>{{$pendaftaran_online->Agama_Ibu}}</td>
              </tr>
              

              <tr>
                <td width="380px">Nomor Orangtua/Wali Whatsapp (Aktif)</td>
                <td colspan="2">{{$pendaftaran_online->No_Whatsapp}}</td>
              </tr>

            </tbody>
            </table>

            <p class=" well well-sm px-1 mt-3" style="margin-top: 5px;">
              Dengan ini menyatakan bahwa data yang diisi adalah sah, benar, dapat dipertanggungjawabkan dan bersedia mengikutsertakan anak kami dalam segala kegiatan yang diadakan oleh Sekolah Minggu serta bersedia menaati Tata Tertib Sekolah Minggu yang berlaku.
            </p>


          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="container text-center mt-3">
          <div class="row justify-content-end">
            <div class="col-4">
              {{date('d-M-y')}}
            </div>
            <br>
            <br>
            <div class="row justify-content-end mt-5">
              <div class="col-4">
              (.............................................)  
              </div>
            <div class="row justify-content-end">
              <div class="col-4">
                Nama Lengkap & TTD
              </div>

          </div>
        </div>
        <!-- /.row -->

      <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
  </body>

@endsection

