<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PENDAFTARAN SMMAM</title>

<!-- Menyisipkan Bootstrap -->
<link rel="stylesheet" href="{{asset('template_admin/')}}/bootstrap 5.1/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('template_admin/')}}/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('template_admin/')}}/dist/css/adminlte.min.css">

<style>
  #mandarin {
    color: #040404;

  }

  #blok {
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 3px;
    text-align:left;
  }

  #body {
    font-family: droidsansfallback, sans-serif;
}

rapi{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
  
</style>

</head>
<body id=body>
  
  <body>
    <div class="container">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          {{-- <img src="{{url('Gambar/Kop_SMMAM.png')}}" class="rounded mx-auto d-block" style="width: 200px;"  /> --}}
          <img src="{{ $logo }}" class="rounded mx-auto d-block" style="width: 700px;"  />
        
          {{-- <img src="data:image/png;base64,{{ $image }}"/> --}}
         {{-- <img src="{{ public_path('Kop.png') }}" style="width: 200px; height: 200px"> --}}
          <div class="col-12">
            <h4 style="text-align:center;"
            margin-bottom: 0px;>              
              FOMULIR PENDAFTARAN PESERTA DIDIK BARU<br>
              SEKOLAH MINGGU MANDARIN ANAK MAITREYA <br>
            </h4>

          </div>
          <!-- /.col -->
        </div>
        <div class="container">
          <br>
          <table  class="table table-borderless text-center" >
            
            <thead>
              <td class="table-primary font-weight-bold" style="background-color:#cee8ff;">No Pendaftaran</td>
            </thead>
            <tbody>
            <tr>
              <td class="table-light col-3"style="color: #ff0800; background-color:#F0F8FF;">{{$pendaftaran_online->No_Form}}</td>
              <td class=" col-6"></td>
              {{-- <td class="col-3"> <img src="{{url('foto_ppdb/'.$pendaftaran_online->Foto_Siswa)}}" width="100px"> </td> --}}
                <td class="col-3">
                  <img src="{{ $gambar }}" 
                  style="height:100px;
                  display: block;
                  position: absolute;
                  top : 180px;
                  right: 15px" >
                </td>
            </tr>
            </tbody>
          </table>
      </div>

        <section class="mt-2" style="background-color: #cfcfcf;  ">
          <h4  
          style="color: #800080;
          background-color: #cfcfcf;
          padding-top: 5px;
          padding-bottom: 5px;
          padding-left: 3px;
          text-align:Center"
          >DATA RINCIAN PESERTA DIDIK</h4>
        <h5 id=blok
        style="
        background-color: #00ff00">DATA PRIBADI</h5>
        </section>
        <!-- Table row -->
        <div class="row">
          <div>
            <table style="padding-top: 0px;" class="table table-border">
              <tbody>
                <tr>
                  <td width="150px">Nama Indonesia</td>
                  <td width="20px">:</td>
                  <td width="220px">{{$pendaftaran_online->Nama_Lengkap}}</td>
                  <td width="15px">Nama Mandarin</td>
                  <td width="30px">:</td>
                  <td id="mandarin">{{$pendaftaran_online->Nama_Mandarin}}</td>
                </tr>


              <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>{{$pendaftaran_online->Tempat_Lahir}}</td>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>{{$pendaftaran_online->Tanggal_Lahir}}</td>
              </tr>

              <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{$pendaftaran_online->Jenis_Kelamin}}</td>
                <td>Agama</td>
                <td>:</td>
                <td>{{$pendaftaran_online->Agama}}</td>
              </tr>

              <tr>
                <td colspan="1">Alamat Sekarang</td>
                <td>:</td>
                <td colspan="4">{{$pendaftaran_online->Alamat}}</td>
              </tr>

              <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td>{{$pendaftaran_online->Sekolah_Asal}}</td>
                <td>Kelas Asal</td>
                <td>:</td>
                <td>{{$pendaftaran_online->Kelas_Asal}}</td>
              </tr>
              </tbody>
            </table>
          
            <section class="mt-2">
            <h5 id=blok class="py-2 ps-2 font-weight-bold" style="background-color: #00ff00;">KHUSUS DIISI UMAT BUDDHA MAITREYA</h5>
            </section>

            <table class="table table-border">
              <tbody>
              <tr>
                <td>Tempat Memohon Ketuhanan</td>
                <td width="30px">:</td>
                <td  colspan="3">{{$pendaftaran_online->Tempat_Memohon_Ketuhanan}}</td>

              </tr>
              <tr>
                <td width="250px">Tanggal Memohon Ketuhanan</td>
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
              <h4 id=blok class="text-center py-2 font-weight-bold" style="color: #800080;">DATA ORANG TUA</h4>
            </section>
          
            <table class="table table-border">
              <thead>
                <td id=blok style="text-align:Center; background-color:rgb(31, 154, 255)" class="font-weight-bold">DATA</td>
                <td id=blok style="text-align:Center; background-color:green" class="font-weight-bold">AYAH</td>
                <td id=blok style="text-align:Center; background-color:yellow" class="font-weight-bold">IBU</td>
              </thead>
              <tbody>

              <tr>
                <td width="210px">Nama Lengkap</td>
                <td width="250px">{{$pendaftaran_online->Nama_Ayah}}</td>
                <td width="250px">{{$pendaftaran_online->Nama_Ibu}}</td>
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
                <td width="200px">Nomor Orangtua/Wali Whatsapp (Aktif)</td>
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
        <div style="text-align: right; margin-top:0%;">
          <div>
            <div >
              <br>
              {{date('d-m-Y')}}
              <br> Orang Tua/ Wali Peserta Didik
            </div>
            <p style="font-style: italic" > TTD </p> 
            
            <b style="text-decoration: underline"> {{$pendaftaran_online->Nama_Ortu_Aktif}} </b>
                
            </div>
          </div>
        </div>
        <!-- /.row -->

      <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          {{-- <img src="{{url('Gambar/Kop_SMMAM.png')}}" class="rounded mx-auto d-block" style="width: 200px;"  /> --}}
          <img src="{{ $logo }}" class="rounded mx-auto d-block" style="width: 700px;"  />
          {{-- <img src="data:image/png;base64,{{ $image }}"/> --}}
         {{-- <img src="{{ public_path('Kop.png') }}" style="width: 200px; height: 200px"> --}}
          <div class="col-12">
            <h3 style="text-align:center; margin-top:10px; text-decoration: underline;">              
            TATA TERTIB SISWA<br>
            </h3>

          </div>
          <!-- /.col -->
        </div>
        <div class="container">
          <p style="margin-top:0%">
            <b>A. 	KEHADIRAN </b> 
            <br>
          <small>Siswa wajib hadir 100% pada minggu efektif yang ditentukan sekolah. Maka demi tercapainya proses belajar mengajar yang tertib, lancar, dan bermutu, siswa wajib berada di sekolah pada hari-hari tersebut. Untuk itu, diatur sebagai berikut.
          </small><>
          <small style="padding-left: 10px" >
            <br>1.	Siswa sudah tiba di sekolah sebelum jam 09.00 WIB / sebelum bel tanda masuk berbunyi.
            <br>2.	Siswa yang terlambat akan dikenakan sanksi, sebagai berikut: 
          </small>
            <small style="padding-left: 50px;">
              <br><small style="color: antiquewhite"> ....</small>a.	Ijin/sakit sebanyak 3 kali sama dengan Alpa 1 kali, Peringatan lisan kepada siswa.
              <br><small style="color: antiquewhite"> ....</small>b.	Alpa sebanyak 3 kali Peringatan I secara tertulis
              <br><small style="color: antiquewhite"> ....</small>c.	Alpa sebanyak 4 kali dianggap telah mengundurkan diri.
            </small>
          <small>
            <br>3.	Siswa yang tidak masuk sekolah karena sesuatu hal harus memberitahukan kepada pihak sekolah atau wali kelas secara lisan pada hari itu dan membawa surat ijin yang dibuat orang tua pada saat masuk.
            <br>4.	Siswa yang tidak masuk 2 (dua) kali atau lebih karena sakit, harus (wajib) melampirkan surat keterangan sakit dari dokter sesuai dengan keterangan waktu siswa tidak masuk.
            <br>5.	Seluruh siswa wajib mengikuti BHAKTI PUJA dan semua kegiatan diselenggarakan sekolah
            <br>6.	Wajib menyatakan datang / pulang dan membaca doa sebelum / sesudah kegiatan belajar
            <br>7.	Selama kegiatan belajar berlangsung siswa hanya diperkenankan keluar dari lingkungan sekolah atas izin dari wali kelas.
            <br>8.	Siswa yang meninggalkan sekolah tanpa izin dianggap membolos dan dianggap sama dengan alpa sebanyak 1 kali.
            <br>9.	Siswa tidak diizinkan libur mendahului ketentuan libur yang ditetapkan sekolah dan juga tidak diizinkan masuk sekolah  melampaui batas waktu libur.
          </small>
        <br>
        <br>
            <b>B.	BERPAKAIAN DAN BERPENAMPILAN</b>
          <small>
            <br>1.	Siswa harus berpakaian seragam sekolah yang bersih, rapi, sopan, dan bersepatu serta sesuai dengan ketentuan yang berlaku.
            <br>2.	Siswa tidak dibenarkan bersolek berlebihan, memakai perhiasan atau aksesoris berlebihan, memelihara kuku, dan memakai cat kuku.
            <br>3.	Siswa tidak diperkenankan mengecat rambut dan bagi siswa putra dilarang berambut panjang melebihi kerah baju, daun telinga, dan alis mata.
            <br>4.	Siswa dilarang bertato dan bagi siswa putra dilarang bertindik.
            </small>
          
            <br><br>
          <b>C.	LINGKUNGAN SEKOLAH</b>
          <small>
            <br>1.	Siswa wajib menjaga ketertiban dan keamanan kelas selama kegiatan belajar mengajar.
            <br>2.	Siswa wajib menjaga kebersihan dan merawat sarana dan prasarana yang ada di kelas dan lingkungan sekolah.
            </small>
          
            <br>
            <b>D.	SIKAP DAN PERILAKU</b>
            <small>
              <br>1.	Siswa harus bertutur dan bersikap sopan, memberikan salam ketika berpapasan dengan bapak/ ibu guru, staf sekolah/ yayasan maupun pengunjung.
              <br>2.	Siswa harus menjunjung sikap saling menghormati/ toleransi, sikap berani membela kebenaran dan keadilan serta menjaga hubungan kekeluargaan yang baik.
              <br>3.	Siswa dilarang keras merokok, minum minuman beralkohol, dan mengkonsumsi narkoba.
              <br>4.	Siswa dilarang keras terlibat dalam perkelahian / tawuran, baik di dalam lingkungan sekolah maupun di luar lingkungan sekolah.
              <br>5.	Siswa tidak diperbolehkan melakukan tindakan asusila dan/ atau kriminal. 
              </small>
              <br>
              <br>
              <b>E.	LAIN-LAIN</b>
              <small>
                <br>1.	Siswa dilarang membawa makanan hewani dan mengandung bawang ke sekolah.
                <br>2.	Siswa tidak diperbolehkan membawa dan memakan permen karet di lingkungan sekolah.
                </small>

                <small>Demikian tata tertib ini dibuat untuk dilaksanakan sebaik-baiknya, Hal lain yang belum dicantumkan dalam tata tertib di atas akan diatur kemudian.</small>
    
                <p style="text-align: right; margin-top:0%; ">
                  <small style="font-style: italic">
                  Ditetapkan dan disahkan oleh
                  <br> Koordinator Umum SMMAM
                </small>
                  <br> TTD
                  <br> <b style="text-decoration: underline">Guan Di</b>
              </p>
            </p>

                </div>


  </body>



{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}

<script src="{{asset('template_admin/')}}/bootstrap 5.1/js/bootstrap.bundle.min.js"></script>
</html>
  