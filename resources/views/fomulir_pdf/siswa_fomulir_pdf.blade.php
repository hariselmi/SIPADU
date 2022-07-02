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
            <td class="table-primary font-weight-bold" style="background-color:#cee8ff;">Nomor Induk</td>
            </thead>
            <tbody>
            <tr>
            <td class="table-light col-3"style="color: #ff0800; background-color:#F0F8FF;">{{$peserta_didik->NIS}}</td>
            </tr>
            </tbody>
        </table>

        <table  class="table table-borderless text-center" >
            <thead>
            <td class="table-primary font-weight-bold" style="background-color:#cee8ff;">Nomor Pendaftaran</td>
            </thead>
            <tbody>
            <tr>
            <td class="table-light col-3"style="color: #ff0800; background-color:#F0F8FF;">{{$peserta_didik->No_Form}}</td>
            </tr>
            </tbody>
        </table>


        <style>
            .rotate_image {
                -webkit-transform: rotate(270deg);
                -moz-transform: rotate(270deg);
                -ms-transform: rotate(270deg);
                -o-transform: rotate(270deg);
                transform: rotate(270deg);
            }

        </style>

        
        <img class="rotate_image" src="{{ $gambar }}" 
        style="height:100px;
        display: block;
        position: absolute;
        top : 180px;
        right: 15px">
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
                <td width="220px">{{$peserta_didik->Nama_Lengkap}}</td>

                </tr>


            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>{{$peserta_didik->Tempat_Lahir}}</td>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>{{$peserta_didik->Tanggal_Lahir}}</td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{$peserta_didik->Jenis_Kelamin}}</td>
                <td>Agama</td>
                <td>:</td>
                <td>{{$peserta_didik->Agama}}</td>
            </tr>

            <tr>
                <td colspan="1">Alamat Sekarang</td>
                <td>:</td>
                <td colspan="4">{{$peserta_didik->Alamat}}</td>
            </tr>

            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td>{{$peserta_didik->Sekolah_Asal}}</td>
                <td>Kelas Asal</td>
                <td>:</td>
                <td>{{$peserta_didik->Kelas_Asal}}</td>
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
                <td  colspan="3">{{$peserta_didik->Tempat_Memohon_Ketuhanan}}</td>

            </tr>
            <tr>
                <td width="250px">Tanggal Memohon Ketuhanan</td>
                <td width="30px">:</td>
                <td  colspan="3">{{$peserta_didik->Tanggal_Memohon_Ketuhanan}}</td>
            </tr>

            <tr>
                <td>Apakah Sudah Bervegetarian</td>
                <td width="30px">:</td>
                <td>{{$peserta_didik->Vegetarian}}</td>
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
                <td width="250px">{{$peserta_didik->Nama_Ayah}}</td>
                <td width="250px">{{$peserta_didik->Nama_Ibu}}</td>
            </tr>

            <tr>
                <td>Nomor HP (WA)</td>
                <td>{{$peserta_didik->No_HP_Ayah}}</td>
                <td>{{$peserta_didik->No_HP_Ibu}}</td>
            </tr>

            <tr>
                <td>Agama</td>
                <td>{{$peserta_didik->Agama_Ayah}}</td>
                <td>{{$peserta_didik->Agama_Ibu}}</td>
            </tr>
            

            <tr>
                <td width="200px">Nomor Orangtua/Wali Whatsapp (Aktif)</td>
                <td colspan="2">{{$peserta_didik->No_Whatsapp}}</td>
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
            
            <b style="text-decoration: underline"> {{$peserta_didik->Nama_Ortu_Aktif}} </b>
                
            </div>
        </div>
        </div>
        <!-- /.row -->

    <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->


</body>



{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}

<script src="{{asset('template_admin/')}}/bootstrap 5.1/js/bootstrap.bundle.min.js"></script>
</html>
