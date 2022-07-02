<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PENDAFTARAN GURU SMMAM</title>

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
<body style="background-color:rgb(0, 104, 42);">
  
  <div class="container bg-light">
    <div class="container mt-3">
      <img src= " {{url('Gambar/SMMAM_Logo.png')}} " class="rounded mx-auto d-block" style="width: 300px;" alt="..." />
        <section class="row">
        <h3 class="text-center">FOMULIR PENDAFTARAN GURU BARU</h3>
        <h4 class="text-center">SEKOLAH MINGGU MANDARIN ANAK MAITREYA</h4>
        <h4 class="text-center">天恩彌勒儿童青少年班</h4>
      </section>
    </div>

    
    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
      {{session('pesan')}}
      </div>
      @endif
      <form method="POST" action="/guru/tambahguru" class="needs-validation" novalidate enctype="multipart/form-data">
        @csrf
      <div class="container">
            <H6 class="bg-primary text-center col-4 py-1">Nomor Fomulir</H6>
            <input type="text" class="form-control col-4 text-danger text-center" id="NIG" name="NIG" value="{{$nomor}}" readonly>
            {{-- <td class="col-3"> <img src="{{url('foto_ppdb/'.$pendaftaran_online->Foto_Siswa)}}" width="100px"> </td> --}}
          
    </div>

    <section class="mt-2" style="background-color: #cfcfcf;">
      <h3 class="text-center py-2" style="color: #800080;">DATA RINCIAN PESERTA DIDIK</h3> 
    </section>

    <section>
      <h5 class="py-2 ps-2 mt-1" style="background-color: #00ff00;">DATA PRIBADI</h5>
      </section>
  
          <div class="mb-2">
            <label for="Nama_Lengkap" class="form-group">Nama Lengkap</label>
            <input type="text" class="form-control @error('Nama_Lengkap') is-invalid @enderror" id="Nama_Lengkap" name="Nama_Lengkap" value="{{old('Nama_Lengkap')}}"  placeholder="Isi Nama Lengkap (berdasarkan akte lahir)">
            @error('Nama_Lengkap')
            <span class="text-danger">{{ $message }}</span> 
            @enderror
          </div>
  
          <div class="mb-2">
            <label for="Nama_Mandarin" class="form-group">Nama Mandarin</label>
            <input type="text" class="form-control @error('Nama_Mandarin') is-invalid @enderror" id="Nama_Mandarin" name="Nama_Mandarin" value="{{old('Nama_Mandarin')}}"  placeholder="Nama Mandarin - Pin Yin">
            @error('Nama_Mandarin')
            <span class="text-danger">{{ $message }}</span> 
            @enderror
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="Tempat_Lahir"> Tempat Lahir</label>
                <input type="text" id="Tempat_Lahir" name="Tempat_Lahir" class="form-control @error('Tempat_Lahir') is-invalid @enderror" value="{{old('Tempat_Lahir')}}"  placeholder="Tempat Lahir"/>
                @error('Tempat_Lahir')
                <span class="text-danger">{{ $message }}</span> 
                @enderror
              </div>
            </div>
  
            <div class="col-md-3">
              <div class="form-group">
                <label for="Tanggal_Lahir"> Tanggal Lahir</label>
                <input type="date" id="Tanggal_Lahir" name="Tanggal_Lahir" value="{{old('Tanggal_Lahir')}}"  class="form-control @error('Tanggal_Lahir') is-invalid @enderror"/>
                @error('Tanggal_Lahir')
                <span class="text-danger">{{ $message }}</span> 
                @enderror
              </div>
            </div>
          
            <div class="form-group col-md-6 ">
            <label for="Jenis_Kelamin">Jenis Kelamin</label>
            <select class="form-select @error('Jenis_Kelamin') is-invalid @enderror" id="Jenis_Kelamin" name="Jenis_Kelamin" >
              <option selected disabled value>Jenis Kelamin</option>
              <option value="Laki-laki" @if (old('Jenis_Kelamin') == "Laki-laki") {{ 'selected' }} @endif>Laki-laki</option>
              <option value="Perempuan" @if (old('Jenis_Kelamin') == "Perempuan") {{ 'selected' }} @endif>Perempuan</option>
            </select>
            @error('Jenis_Kelamin')
            <span class="text-danger">{{ $message }}</span> 
            @enderror
            </div>
          
            <div class="col-md-6">
              <div class="form-group ">
                <label for="Agama">Agama</label>
                <select class="form-select @error('Agama') is-invalid @enderror" id="Agama" name="Agama" >
                  <option selected disabled value>Agama</option>
                  <option value="Buddha Maitreya" @if (old('Agama') == "Buddha Maitreya") {{ 'selected' }} @endif>Buddha Maitreya</option>
                  <option value="Buddha Umum" @if (old('Agama') == "Buddha Umum") {{ 'selected' }} @endif>Buddha Umum</option>
                  <option value="Kong Hu Cu" @if (old('Agama') == "Kong Hu Cu") {{ 'selected' }} @endif>Kong Hu Cu</option>
                  <option value="Islam" @if (old('Agama') == "Islam") {{ 'selected' }} @endif>Islam</option>
                  <option value="Kristen" @if (old('Agama') == "Kristen") {{ 'selected' }} @endif>Kristen</option>
                  <option value="Katolik" @if (old('Agama') == "Katolik") {{ 'selected' }} @endif>Katolik</option>
                </select>
                @error('Agama')
                <span class="text-danger">{{ $message }}</span> 
                @enderror
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group ">
                <label for="Status">Status</label>
                <select class="form-select @error('Status') is-invalid @enderror" id="Status" name="Status" >
                  <option selected disabled value>Status</option>
                  <option value="Guru" @if (old('Status') == "Guru") {{ 'selected' }} @endif>Guru</option>
                  <option value="Admin" @if (old('Status') == "Admin") {{ 'selected' }} @endif>Admin</option>
                </select>
                @error('Agama')
                <span class="text-danger">{{ $message }}</span> 
                @enderror
              </div>
            </div>
  
            <div class="col-md-6">
              <div class="form-group">
                <label for="No_Whatsapp">Nomor Whatsapp</label>
                <input type="number" id="No_Whatsapp" name="No_Whatsapp" class="form-control @error('No_Whatsapp') is-invalid @enderror" value="{{old('No_Whatsapp')}}"  autocomplete="false" placeholder="Isi No Whatsapp Aktif"/>
                @error('No_Whatsapp')
                <span class="text-danger">{{ $message }}</span> 
                @enderror
              </div>
            </div>
  

          <div class="form-group mb-3">
            <label for="Alamat">Alamat</label>
            <input type="text" id="Alamat" name="Alamat" class="form-control" autocomplete="false" value="{{old('Alamat')}}" placeholder="Isi alamat sekarang | Komplek Tempat Tinggal, Blok, Jalan " />
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
            <div class="form-group col-md-6 ">
              <label for="Memohon_Ketuhanan">Apakah Sudah Memohon Ketuhanan?</label>
              <select class="form-select" id="Memohon_Ketuhanan" name="Memohon_Ketuhanan " onchange = "EnableDisableTextBox(this)" >
                <option selected disabled value>Apakah Sudah Memohon Ketuhanan</option>
                <option value="Iya" @if(old('Memohon_Ketuhanan') == "Iya") {{ 'selected' }} @endif>Iya</option>
                <option value="Tidak" @if(old('Memohon_Ketuhanan') == "Tidak") {{ 'selected' }} @endif>Tidak</option>
              </select>
            </div>
  
            <div class="form-group col-md-6">
              <label for="Vegetarian">Apakah Sudah bervegetarian?</label>
              <select class="form-select" id="Vegetarian" name="Vegetarian">
                <option selected disabled value>Apakah Sudah bervegetarian?</option>
                <option value="Iya" @if(old('Vegetarian') == "Iya") {{ 'selected' }} @endif>Iya</option>
                <option value="Tidak" @if(old('Vegetarian') == "Tidak") {{ 'selected' }} @endif>Tidak</option>
              </select>
            </div>
          </div>
  
          <div class="row">
            <div class="form-group col-md-6">
            <label for="Tempat_Memohon_Ketuhanan">Tempat Vihara Memohon Ketuhanan</label>
            <input type="text" id="Tempat_Memohon_Ketuhanan" name="Tempat_Memohon_Ketuhanan" class="form-control" value="{{old('Tempat_Memohon_Ketuhanan')}}" autocomplete="false" placeholder="Isi vihara tempat memohon ketuhanan" disabled/>
            <small class="text-secondary">Nama Vihara - Kota | contoh : Maha Vihara Duta Maitreya- Batam</small>
            </div>
  
          <div class="col-md-4">
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

        <div class="col-12">
        <div class="form-check">
          <label class="form-check-label" for="invalidCheck">
          Dengan ini menyatakan bahwa data yang diisi adalah sah, benar, dapat dipertanggungjawabkan dan bersedia mengikutsertakan anak kami dalam segala kegiatan yang diadakan oleh Sekolah Minggu serta bersedia menaati Tata Tertib Sekolah Minggu yang berlaku.
          </label>
          <div class="invalid-feedback">
          beri tanda ceklist pernyataan ini!.
          </div>
          {{-- @error('invalidCheck')
          <span class="text-danger">{{ $message }}</span> 
          @enderror --}}
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
                <form method="POST" action="/guru/tambahguru" enctype="multipart/form-data">
                  Apakah Data sudah diisi dengan benar?
              </div>
              <div class="modal-footer justify-content-between ">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                <button class="btn btn-success">Setuju </button>
            </form>
          </div>
          <div>
            <h6 class="text-secondary text-right mr-3 mb-3">Harap tunggu jika sudah menekan tombol setuju</h6>
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