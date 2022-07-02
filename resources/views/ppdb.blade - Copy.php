<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PENDAFTARAN SMMAM</title>

      <!-- Menyisipkan Bootstrap -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template_admin/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template_admin/')}}/dist/css/adminlte.min.css">
  <!-- data tables Main content -->
  {{-- bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('template_admin/')}}/plugins/toastr/toastr.min.css">
    <!-- SweetAlert2 -->
    <!-- SweetAlert2 -->
    <link
      rel="stylesheet"
      href="{{asset('template_admin/')}}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css"
    />

</head>
<body style="background-color:blue;">
  
  <div class="container bg-light">
    <div class="container mt-3">
      <img src="Gambar/SMMAM_Logo.png" class="rounded mx-auto d-block" style="width: 300px;" alt="..." />
      <section class="row">
        <h3 class="text-center">FOMULIR PENDAFTARAN PESERTA DIDIK BARU</h3>
        <h4 class="text-center">SEKOLAH MINGGU MANDARIN ANAK MAITREYA</h4>
        <h4 class="text-center">天恩彌勒儿童青少年班</h4>
      </section>
    </div>

    
    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
      {{session('pesan')}}.
      </div>
      @endif
      <form method="POST" action="ppdb/insert" class="needs-validation" novalidate enctype="multipart/form-data">
        @csrf
      <div class="container">
            <H6 class="bg-primary text-center col-4 py-1">Nomor Fomulir</H6>
            <input type="text" class="form-control col-4 text-danger text-center" id="No_Form" name="No_Form" value="{{$nomor}}" readonly>
            {{-- <td class="col-3"> <img src="{{url('foto_ppdb/'.$pendaftaran_online->Foto_Siswa)}}" width="100px"> </td> --}}
          
    </div>

    <section class="mt-2" style="background-color: #cfcfcf;">
      <h3 class="text-center py-2" style="color: #800080;">DATA RINCIAN PESERTA DIDIK</h3> 
    </section>

    <section>
    <h5 class="py-2 ps-2 mt-1" style="background-color: #00ff00;">DATA PRIBADI</h5>
    </section>

   
        <div class="mb-2 ps-2">
          <label for="Nama_Lengkap" class="form-group">Nama Lengkap</label>
          <input type="text" class="form-control mb-2" id="Nama_Lengkap" name="Nama_Lengkap" value="{{old('Nama_Lengkap')}}" placeholder="Isi Nama Lengkap (berdasarkan akte lahir)" required>
          <div class="invalid-feedback">
              Mohon isi Nama Lengkap
        </div>

        <div class="mb-2">
          <label for="Nama_Mandarin" class="form-group">Nama Mandarin</label>
          <input type="text" class="form-control" id="Nama_Mandarin" name="Nama_Mandarin" value="{{old('Nama_Mandarin')}}" placeholder="Nama Mandarin - Pin Yin">
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="Tempat_Lahir"> Tempat Lahir</label>
              <input type="text" id="Tempat_Lahir" name="Tempat_Lahir" class="form-control" value="{{old('Tempat_Lahir')}}" placeholder="Tempat Lahir" required/>
            </div>
          </div>

          <div class="col-md-3 mb-2">
            <div class="form-group">
              <label for="Tanggal_Lahir"> Tanggal Lahir</label>
              <input type="date" id="Tanggal_Lahir" name="Tanggal_Lahir" value="{{old('Tanggal_Lahir')}}" class="form-control" required/>
            </div>
          </div>
        
          <div class="form-group col-md-6 mb-2">
          <label for="Jenis_Kelamin">Jenis Kelamin</label>
          <select class="form-select" id="Jenis_Kelamin" name="Jenis_Kelamin" required>
            <option selected disabled value>Jenis Kelamin</option>
            <option value="Laki-laki" @if (old('Jenis_Kelamin') == "Laki-laki") {{ 'selected' }} @endif>Laki-laki</option>
            <option value="Perempuan" @if (old('Jenis_Kelamin') == "Perempuan") {{ 'selected' }} @endif>Perempuan</option>
          </select>
          </div>
        
          <div class="col-md-6">
            <div class="form-group mb-2">
              <label for="Agama">Agama</label>
              <select class="form-select" id="Agama" name="Agama" required>
                <option selected disabled value>Agama</option>
                <option value="Buddha Maitreya" @if (old('Agama') == "Buddha Maitreya") {{ 'selected' }} @endif>Buddha Maitreya</option>
                <option value="Buddha Umum" @if (old('Agama') == "Buddha Umum") {{ 'selected' }} @endif>Buddha Umum</option>
                <option value="Kong Hu Cu" @if (old('Agama') == "Kong Hu Cu") {{ 'selected' }} @endif>Kong Hu Cu</option>
                <option value="Islam" @if (old('Agama') == "Islam") {{ 'selected' }} @endif>Islam</option>
                <option value="Kristen" @if (old('Agama') == "Kristen") {{ 'selected' }} @endif>Kristen</option>
                <option value="Katolik" @if (old('Agama') == "Katolik") {{ 'selected' }} @endif>Katolik</option>
              </select>
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Sekolah_Asal"> Sekolah di</label>
              <input type="text" id="Sekolah_Asal" name="Sekolah_Asal" class="form-control" value="{{old('Sekolah_Asal')}}" placeholder="Berasal dari Sekolah? | Contoh: SD Maitreyawira" required/>
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Tempat_Lahir"> Kelas</label>
              <input type="text" id="Kelas" name="Kelas" class="form-control" value="{{old('Kelas')}}" placeholder="Kelas sekarang | contoh: 3D" required/>
            </div>
          </div>
        </div>

        <div class="form-group mb-3">
          <label for="Alamat">Alamat</label>
          <input type="text" id="Alamat" name="Alamat" class="form-control" autocomplete="false" value="{{old('Alamat')}}" placeholder="Isi alamat sekarang | Komplek Tempat Tinggal, Blok, Jalan " required />
        </div>

        <div>
            <label class="form-label" for="inputImage">Pas Foto Peserta Didik:</label>
            <input 
                type="file" 
                name="image" 
                id="image"
                class="form-control @error('image') is-invalid @enderror" >
            @error('image')
             <span class="text-danger">{{ $message }}</span> 
             @enderror
        </div>

          <small>Upload File Pas Foto | jpeg,png,jpg | Maksimal 2MB</small>

        <section>
          <h5 class="ps-2 mt-3 mb-3 py-2" style="background-color: #00ff00;">KHUSUS DIISI UMAT BUDDHA MAITREYA</h5>
          </section>

        <div class="row">
          <div class="form-group col-md-6 mb-2">
            <label for="Memohon_Ketuhanan">Apakah Sudah Memohon Ketuhanan?</label>
            <select class="form-select" id="Memohon_Ketuhanan" name="Memohon_Ketuhanan " onchange = "EnableDisableTextBox(this)" >
              <option selected disabled value>Apakah Sudah Memohon Ketuhanan</option>
              <option value="Iya" @if(old('Memohon_Ketuhanan') == "Iya") {{ 'selected' }} @endif>Iya</option>
              <option value="Tidak" @if(old('Memohon_Ketuhanan') == "Tidak") {{ 'selected' }} @endif>Tidak</option>
            </select>
          </div>

          <div class="form-group col-md-6 mb-2">
            <label for="Vegetarian">Apakah Sudah bervegetarian?</label>
            <select class="form-select" id="Vegetarian" name="Vegetarian">
              <option selected disabled value>Apakah Sudah bervegetarian?</option>
              <option value="Iya" @if(old('Vegetarian') == "Iya") {{ 'selected' }} @endif>Iya</option>
              <option value="Tidak" @if(old('Vegetarian') == "Tidak") {{ 'selected' }} @endif>Tidak</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6 mb-2">
          <label for="Tempat_Memohon_Ketuhanan">Tempat Vihara Memohon Ketuhanan</label>
          <input type="text" id="Tempat_Memohon_Ketuhanan" name="Tempat_Memohon_Ketuhanan" class="form-control" value="{{old('Tempat_Memohon_Ketuhanan')}}" autocomplete="false" placeholder="Isi vihara tempat memohon ketuhanan" disabled/>
          <small class="text-secondary">Nama Vihara - Kota | contoh : Maha Vihara Duta Maitreya- Batam</small>
          </div>

        <div class="col-md-4 mb-3">
            <div class="form-group">
              <label for="Tanggal_Memohon_Ketuhanan"> Tanggal Memohon Ketuhanan</label>
              <input type="date" id="Tanggal_Memohon_Ketuhanan" name="Tanggal_Memohon_Ketuhanan" value="{{old('Tanggal_Memohon_Ketuhanan')}}" class="form-control" disabled/>
              <small class=text-secondary>jika lupa diperbolehkan kurang lebih tanggal berapa?</small>
            
            </div>
          </div>
        </div>
        {{-- javascript disable enable memohon ketuhacnan --}}
          <script type="text/javascript">
            function EnableDisableTextBox(Memohon_Ketuhanan) {
                var selectedValue = Memohon_Ketuhanan.options[Memohon_Ketuhanan.selectedIndex].value;
                var Tempat_Memohon_Ketuhanan = document.getElementById("Tempat_Memohon_Ketuhanan");
                Tempat_Memohon_Ketuhanan.disabled = selectedValue == "Iya"? false  : true;
                if (!Tempat_Memohon_Ketuhanan.disabled) {
                  // Tempat_Memohon_Ketuhanan.focus();
                }

                var Tanggal_Memohon_Ketuhanan = document.getElementById("Tanggal_Memohon_Ketuhanan");
                Tanggal_Memohon_Ketuhanan.disabled = selectedValue == "Iya"? false : true;
                if (!Tanggal_Memohon_Ketuhanan.disabled) {
                }
              }
          </script>


<section>
  <h4 class="ps-2 py-2 text-center" style="background-color: #cfcfcf; color:#000080;">DATA ORANG TUA</h4>
</section>

      <section>
        <h5 class="ps-2 mt-1 py-2" style="background-color: #80ff00;">DATA AYAH</h5>
      </section>
        <div class="row">
          <div class="form-group col-md-6 mb-2">
          <label for="Nama_Ayah">Nama Ayah</label>
          <input type="text" id="Nama_Ayah" name="Nama_Ayah" class="form-control"  value="{{old('Nama_Ayah')}}" autocomplete="false" placeholder="Isi nama lengkap ayah" />
        </div>

        <div class="form-group col-md-6 mb-2'>
          <label for="No_HP_Ayah">Nomor Telepon Ayah</label>
          <input type="number" id="No_HP_Ayah" name="No_HP_Ayah" class="form-control" value="{{old('No_HP_Ayah')}}" autocomplete="false" placeholder="Isi nomor Telepon Ayah aktif" />
        </div>

        <div class="col-md-6">
            <div class="form-group mb-2">
              <label for="Agama_Ayah">Agama Ayah </label>
              <select class="form-select" id="Agama_Ayah" name="Agama_Ayah">
                <option selected disabled value>Agama</option>
                <option value="Buddha Maitreya" @if (old('Agama_Ayah') == "Buddha Maitreya") {{ 'selected' }} @endif>Buddha Maitreya</option>
                <option value="Buddha Umum" @if (old('Agama_Ayah') == "Buddha Umum") {{ 'selected' }} @endif>Buddha Umum</option>
                <option value="Kong Hu Cu" @if (old('Agama_Ayah') == "Kong Hu Cu") {{ 'selected' }} @endif>Kong Hu Cu</option>
                <option value="Islam" @if (old('Agama_Ayah') == "Islam") {{ 'selected' }} @endif>Islam</option>
                <option value="Kristen" @if (old('Agama_Ayah') == "Kristen") {{ 'selected' }} @endif>Kristen</option>
                <option value="Katolik" @if (old('Agama_Ayah') == "Katolik") {{ 'selected' }} @endif>Katolik</option>
              </select>
            </div>
          </div>
        </div>

      <section>
        <h5 class="ps-2 mt-3 py-2" style="background-color: #ff8000;">DATA IBU</h5>
      </section>
        <div class="row">
          <div class="form-group col-md-6 mb-2">
          <label for="Nama_Ibu">Nama Ibu</label>
          <input type="text" id="Nama_Ibu" name="Nama_Ibu" class="form-control"  value="{{old('Nama_Ibu')}}"autocomplete="false" placeholder="Isi nama lengkap ibu" />
        </div>

        <div class="form-group col-md-6 mb-2">
          <label for="No_HP_Ibu">Nomor Telepon Ibu</label>
          <input type="number" id="No_HP_Ibu" name="No_HP_Ibu" class="form-control" value="{{old('No_HP_Ibu')}}" autocomplete="false" placeholder="Isi nomor Telepon ibu aktif" />
        </div>

        <div class="col-md-6">
            <div class="form-group mb-2">
              <label for="Agama_Ibu">Agama Ibu </label>
              <select class="form-select" id="Agama_Ibu" name="Agama_Ibu">
                <option selected disabled value>Agama</option>
                <option value="Buddha Maitreya" @if (old('Agama_Ibu') == "Buddha Maitreya") {{ 'selected' }} @endif>Buddha Maitreya</option>
                <option value="Buddha Umum" @if (old('Agama_Ibu') == "Buddha Umum") {{ 'selected' }} @endif>Buddha Umum</option>
                <option value="Kong Hu Cu" @if (old('Agama_Ibu') == "Kong Hu Cu") {{ 'selected' }} @endif>Kong Hu Cu</option>
                <option value="Islam" @if (old('Agama_Ibu') == "Islam") {{ 'selected' }} @endif>Islam</option>
                <option value="Kristen" @if (old('Agama_Ibu') == "Kristen") {{ 'selected' }} @endif>Kristen</option>
                <option value="Katolik" @if (old('Agama_Ibu') == "Katolik") {{ 'selected' }} @endif>Katolik</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group mb-2">
          <label for="No_Whatsapp">Nama Orang Tua (Aktif)</label>
          <input type="text" id="Nama_Ortu_Aktif" name="Nama_Ortu_Aktif" class="form-control" value="{{old('Nama_Ortu_Aktif')}}" autocomplete="false" placeholder="Isi salah satu nama ortu" required/>
          <small class="text-secondary">Nama salah satu Orang Tua/Wali (Aktif)</small>
        </div>

        <div class="form-group mb-3">
          <label for="No_Whatsapp">Nomor Whatsapp</label>
          <input type="number" id="No_Whatsapp" name="No_Whatsapp" class="form-control" value="{{old('No_Whatsapp')}}" autocomplete="false" placeholder="Isi No Whatsapp salah satu Orang Tua/Wali Aktif" required/>
          <small class="text-secondary">Nomor Whatsapp salah satu Orang Tua/Wali (Aktif)</small>
        </div>

        <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
          Dengan ini menyatakan bahwa data yang diisi adalah sah, benar, dapat dipertanggungjawabkan dan bersedia mengikutsertakan anak kami dalam segala kegiatan yang diadakan oleh Sekolah Minggu serta bersedia menaati Tata Tertib Sekolah Minggu yang berlaku.
          </label>
          <div class="invalid-feedback">
          beri tanda ceklist pernyataan ini!.
          </div>
        </div>


        <button type="button" class="btn btn-primary mt-3 mb-4" data-bs-toggle="modal" data-bs-target="#verifikasidata">
          Simpan
        </button>
{{-- Modal --}}

        <div class="modal fade" id="verifikasidata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">Verifikasi Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body ms-1">
                <form method="POST" action="ppdb/insert" enctype="multipart/form-data">
                  <b>TATA TERTIB SISWA </b> <br>

                  <b>A. 	KEHADIRAN </b> <br>
                      Siswa wajib hadir 100% pada minggu efektif yang ditentukan sekolah. Maka demi tercapainya proses belajar mengajar yang tertib, lancar, dan bermutu, siswa wajib berada di sekolah pada hari-hari tersebut. Untuk itu, diatur sebagai berikut.
                      <br>1.	Siswa sudah tiba di sekolah sebelum jam 09.00 WIB / sebelum bel tanda masuk berbunyi.
                      <br>2.	Siswa yang terlambat akan dikenakan sanksi, sebagai berikut: 
                        <br>1.	Ijin/sakit sebanyak 3 kali sama dengan Alpa 1 kali, Peringatan lisan kepada siswa.
                        <br>2.	Alpa sebanyak 3 kali Peringatan I secara tertulis
                        <br>3.	Alpa sebanyak 4 kali dianggap telah mengundurkan diri.
                      <br>3.	Siswa yang tidak masuk sekolah karena sesuatu hal harus memberitahukan kepada pihak sekolah atau wali kelas secara lisan pada hari itu dan membawa surat ijin yang dibuat orang tua pada saat masuk.
                      <br>4.	Siswa yang tidak masuk 2 (dua) kali atau lebih karena sakit, harus (wajib) melampirkan surat keterangan sakit dari dokter sesuai dengan keterangan waktu siswa tidak masuk.
                      <br>5.	Seluruh siswa wajib mengikuti BHAKTI PUJA dan semua kegiatan diselenggarakan sekolah
                      <br>6.	Wajib menyatakan datang / pulang dan membaca doa sebelum / sesudah kegiatan belajar
                      <br>7.	Selama kegiatan belajar berlangsung siswa hanya diperkenankan keluar dari lingkungan sekolah atas izin dari wali kelas.
                      <br>8.	Siswa yang meninggalkan sekolah tanpa izin dianggap membolos dan dianggap sama dengan alpa sebanyak 1 kali.
                      <br>9.	Siswa tidak diizinkan libur mendahului ketentuan libur yang ditetapkan sekolah dan juga tidak diizinkan masuk sekolah  melampaui batas waktu libur.
                      <br>
                      <br> <b> B.	BERPAKAIAN DAN BERPENAMPILAN </b>
                      <br> 1.	Siswa harus berpakaian seragam sekolah yang bersih, rapi, sopan, dan bersepatu serta sesuai dengan ketentuan yang berlaku.
                      <br> 2.	Siswa tidak dibenarkan bersolek berlebihan, memakai perhiasan atau aksesoris berlebihan, memelihara kuku, dan memakai cat kuku.
                      <br> 3.	Siswa tidak diperkenankan mengecat rambut dan bagi siswa putra dilarang berambut panjang melebihi kerah baju, daun telinga, dan alis mata.
                      <br> 4.	Siswa dilarang bertato dan bagi siswa putra dilarang bertindik.
                      <br>
                      <br> <b> C.	LINGKUNGAN SEKOLAH </b>
                      <br> 1.	Siswa wajib menjaga ketertiban dan keamanan kelas selama kegiatan belajar mengajar.
                      <br> 2.	Siswa wajib menjaga kebersihan dan merawat sarana dan prasarana yang ada di kelas dan lingkungan sekolah.
                      <br>
                      <br> <b> D.	SIKAP DAN PERILAKU </b>
                      <br> 1.	Siswa harus bertutur dan bersikap sopan, memberikan salam ketika berpapasan dengan bapak/ ibu guru, staf sekolah/ yayasan maupun pengunjung.
                      <br> 2.	Siswa harus menjunjung sikap saling menghormati/ toleransi, sikap berani membela kebenaran dan keadilan serta menjaga hubungan kekeluargaan yang baik.
                      <br> 3.	Siswa dilarang keras merokok, minum minuman beralkohol, dan mengkonsumsi narkoba.
                      <br> 4.	Siswa dilarang keras terlibat dalam perkelahian / tawuran, baik di dalam lingkungan sekolah maupun di luar lingkungan sekolah.
                      <br> 5.	Siswa tidak diperbolehkan melakukan tindakan asusila dan/ atau kriminal. 
                      <br>
                      <br> <b> E.	LAIN-LAIN </b>
                      <br> 1.	Siswa dilarang membawa makanan hewani dan mengandung bawang ke sekolah.
                      <br> 2.	Siswa tidak diperbolehkan membawa dan memakan permen karet di lingkungan sekolah.
                      <br> Demikian tata tertib ini dibuat untuk dilaksanakan sebaik-baiknya, Hal lain yang belum dicantumkan dalam tata tertib di atas akan diatur kemudian.

              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                <button class="btn btn-success">Setuju </button>
            </form>
              </div>
            </div>
          </div>
        </div>




      </form>
    </div>

  </div>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>


</body>




{{-- <script>
  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
</script> --}}

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>

<script>


//tampilkan disable form control data memohon ketuhanan





<!-- jQuery -->

<script src="{{asset('template_admin/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="{{asset('template_admin/')}}/dist/js/adminlte.min.js"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('template_admin/')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- SweetAlert2 -->
<script src="{{asset('template_admin/')}}/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="{{asset('template_admin/')}}/plugins/toastr/toastr.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
</html>