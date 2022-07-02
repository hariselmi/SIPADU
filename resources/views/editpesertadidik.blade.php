@extends('layout.template')
@section('title','Data Peserta Didik')

@section('content')
    <div class="container-fluid">
<section class="content">
  
  @if (session('pesan'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
    {{session('pesan')}}.
    </div>
  @endif
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">


  

<form method="POST" action="pesertadidik/edit/" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-2">
                  <label for="NIS" class="form-group">NIS</label>
                  <input type="number" class="form-control bg-secondary" id="NIS" name="NIS" value="{{old('NIS', $data->NIS)}}">
                </div>

                  <div class="mb-2">
                    <label for="Nama_Lengkap" class="form-group">Nama Lengkap</label>
                    <input type="text" class="form-control @error('Nama_Lengkap') is-invalid @enderror mb-2" id="Nama_Lengkap" name="Nama_Lengkap" value="{{$data->Nama_Lengkap}}" placeholder="Isi Nama Lengkap (berdasarkan akte lahir)" >
                    <div class="invalid-feedback">
                        Mohon isi Nama Lengkap  
                  </div>
          
                  <div class="mb-2">
                    <label for="Nama_Mandarin" class="form-group">Nama Mandarin</label>
                    <input type="text" class="form-control" id="Nama_Mandarin" name="Nama_Mandarin" value="{{old('Nama_Mandarin', $data->Nama_Mandarin)}}" placeholder="Nama Mandarin - Pin Yin">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="Tempat_Lahir"> Tempat Lahir</label>
                        <input type="text" id="Tempat_Lahir" name="Tempat_Lahir" class="form-control" value="{{old('Tempat_Lahir', $data->Tempat_Lahir)}}" placeholder="Tempat Lahir" />
                      </div>
                    </div>
          
                    <div class="col-md-3 mb-2">
                      <div class="form-group">
                        <label for="Tanggal_Lahir"> Tanggal Lahir</label>
                        <input type="date" id="Tanggal_Lahir" name="Tanggal_Lahir"  class="form-control" />
                      </div>
                    </div>
                  
                    <div class="form-group col-md-6 mb-2">
                      <label for="Jenis_Kelamin">Jenis Kelamin</label>
                      <select class="form-control" id="Jenis_Kelamin" name="Jenis_Kelamin" >
                        {{-- @if (old('Jenis_Kelamin', $data->Jenis_Kelamin) == $data->Jenis_Kelamin) --}}
                        {{-- @if (old('Jenis_Kelamin') == $data->Jenis_Kelamin) --}}
                        @if (old('Jenis_Kelamin') == $data->Jenis_Kelamin)
                        @else
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        @endif
                      </select>
                      </div>
                  
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="Agama">Agama</label>
                        <select class="form-control" id="Agama" name="Agama" >
                          <option selected disabled value>Agama</option>
                          <option value="Buddha Maitreya">Buddha Maitreya</option>
                          <option value="Buddha Umum">Buddha Umum</option>
                          <option value="Kong Hu Cu">Kong Hu Cu</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katolik">Katolik</option>
                        </select>
                      </div>
                    </div>
          
                    <div class="col-md-6 ">
                      <div class="form-group">
                        <label for="Sekolah_Asal"> Sekolah di</label>
                        <input type="text" id="Sekolah_Asal" name="Sekolah_Asal" class="form-control" value="{{old('Sekolah_Asal', $data->Sekolah_Asal)}}" placeholder="Berasal dari Sekolah? | Contoh: SD Maitreyawira" />
                      </div>
                    </div>
{{--           
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-group">
                          <label for="Kelas">Kelas</label>
                          <select class="form-control" id="Kelas_ID" name="Kelas_ID" >
                            @foreach ($peserta_didik as $data)
                            @if (old('Kelas_ID'))== $data->Kelas_ID
                              <option value="{{$data->Kelas_ID}}" selected>{{$data->kelas->Nama_Kelas}}</option>

                              @else
                              <option value="{{$data->Kelas_ID}}">{{$data->kelas->Nama_Kelas}}</option>
                            @endif
                                
                            @endforeach
                          </select>
                        </div> --}}
                    
                  </div> 
          
                  <div class="form-group mb-3">
                    <label for="Alamat">Alamat</label>
                    <input type="text" id="Alamat" name="Alamat" class="form-control" value="{{old('Alamat', $data->Alamat)}}" autocomplete="false" placeholder="Isi alamat sekarang | Komplek Tempat Tinggal, Blok, Jalan "  />
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label class="form-label" for="inputImage">Pas Foto Peserta Didik:</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="image"
                        class="form-control @error('image') is-invalid @enderror">
                    <small>Upload File Pas Foto Maksimal 2MB</small>
                    @error('image') <span class="text-danger">{{ 'pesan' }}</span> @enderror <br>
                    
                    </div>

                  <div class="mb-3 col-md-6">
                    <img src="{{url('foto_siswa/'.$data->Foto_Siswa)}}" width="150px">
                  </div>
                </div>
          
                  <section>
                    <h5 class="ps-2 mt-3 mb-3 py-2 text-center" style="background-color: #00ff00;">KHUSUS DIISI UMAT BUDDHA MAITREYA</h5>
                  </section>
          
                  <div class="row">
                    <div class="form-group col-md-6 mb-2">
                      <label for="Memohon_Ketuhanan">Apakah Sudah Memohon Ketuhanan?</label>
                      <select class="form-control" id="Memohon_Ketuhanan" name="Memohon_Ketuhanan">
                        <option selected disabled value>Apakah Sudah Memohon Ketuhanan</option>
                        <option value="Iya">Iya</option>
                        <option value="Tidak">Tidak</option>
                      </select>
                    </div>
          
                    <div class="form-group col-md-6 mb-2">
                      <label for="Memohon_Ketuhanan">Apakah Sudah bervegetarian?</label>
                      <select class="form-control" id="Vegetarian" name="Vegetarian">
                        <option selected disabled value>Apakah Sudah bervegetarian?</option>
                        <option value="Iya">Iya</option>
                        <option value="Tidak">Tidak</option>
                      </select>
                    </div>
                  </div>
          
                  <div class="row">
                    <div class="form-group col-md-6 mb-2">
                    <label for="Tempat_Memohon_Ketuhanan">Tempat Vihara Memohon Ketuhanan</label>
                    <input type="text" id="Tempat_Memohon_Ketuhanan" name="Tempat_Memohon_Ketuhanan" value="{{old('Tempat_Memohon_Ketuhanan', $data->Tempat_Memohon_Ketuhanan)}}" class="form-control" autocomplete="false" placeholder="Isi vihara tempat memohon ketuhanan" />
                    <small class="text-secondary">Nama Vihara - Kota | contoh : Maha Vihara Duta Maitreya- Batam</small>
                    </div>
          
                  <div class="col-md-4 mb-3">
                      <div class="form-group">
                        <label for="Tanggal_Memohon_Ketuhanan"> Tanggal Memohon Ketuhanan</label>
                        <input type="date" id="Tanggal_Memohon_Ketuhanan" name="Tanggal_Memohon_Ketuhanan" class="form-control" />
                        <small class=text-secondary>jika lupa diperbolehkan kurang lebih tanggal berapa?</small>
                      
                      </div>
                    </div>
                  </div>
          
          <section>
            <h4 class="ps-2 py-2 text-center" style="background-color: #cfcfcf; color:#000080;">DATA ORANG TUA</h4>
          </section>
          
                <section>
                  <h5 class="ps-2 mt-1 py-2 text-center" style="background-color: #80ff00;">DATA AYAH</h5>
                </section>
                  <div class="row">
                    <div class="form-group col-md-6 mb-2">
                    <label for="Nama_Ayah">Nama Ayah</label>
                    <input type="text" id="Nama_Ayah" name="Nama_Ayah" value="{{old('Nama_Ayah', $data->Nama_Ayah)}}" class="form-control" autocomplete="false" placeholder="Isi nama lengkap ayah" />
                  </div>
          
                  <div class="form-group col-md-6 mb-2">
                    <label for="No_HP_Ayah">Nomor Telepon Ayah</label>
                    <input type="number" id="No_HP_Ayah" name="No_HP_Ayah" value="{{old('No_HP_Ayah', $data->No_HP_Ayah)}}" class="form-control" autocomplete="false" placeholder="Isi nomor Telepon Ayah aktif" />
                  </div>
          
                  <div class="col-md-6">
                      <div class="form-group mb-2">
                        <label for="Agama_Ayah">Agama Ayah </label>
                        <select class="form-control" id="Agama_Ayah" name="Agama_Ayah">
                          <option selected disabled value>Agama</option>
                          <option value="Buddha Maitreya">Buddha Maitreya</option>
                          <option value="Buddha Umum">Buddha Umum</option>
                          <option value="Kong Hu Cu">Kong Hu Cu</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katolik">Katolik</option>
                        </select>
                      </div>
                    </div>
                  </div>
          
                <section>
                  <h5 class="ps-2 mt-3 py-2 text-center" style="background-color: #ff8000;">DATA IBU</h5>
                </section>
                  <div class="row">
                    <div class="form-group col-md-6 mb-2">
                    <label for="Nama_Ibu">Nama Ibu</label>
                    <input type="text" id="Nama_Ibu" name="Nama_Ibu" value="{{old('Nama_Ibu', $data->Nama_Ibu)}}" class="form-control" autocomplete="false" placeholder="Isi nama lengkap ibu" />
                  </div>
          
                  <div class="form-group col-md-6 mb-2">
                    <label for="No_HP_Ibu">Nomor Telepon Ibu</label>
                    <input type="number" id="No_HP_Ibu" name="No_HP_Ibu" value="{{old('No_HP_Ibu', $data->No_HP_Ibu)}}" class="form-control" autocomplete="false" placeholder="Isi nomor Telepon ibu aktif" />
                  </div>
          
                  <div class="col-md-6">
                      <div class="form-group mb-2">
                        <label for="Agama_Ibu">Agama Ibu </label>
                        <select class="form-control" id="Agama_Ibu" name="Agama_Ibu">
                          <option selected disabled value>Agama</option>
                          <option value="Buddha Maitreya">Buddha Maitreya</option>
                          <option value="Buddha Umum">Buddha Umum</option>
                          <option value="Kong Hu Cu">Kong Hu Cu</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katolik">Katolik</option>
                        </select>
                      </div>
                    </div>
                  </div>
          
                  <div class="form-group mb-3">
                    <label for="No_Whatsapp">Nomor Whatsapp</label>
                    <input type="number" id="No_Whatsapp" name="No_Whatsapp" value="{{old('No_Whatsapp', $data->No_Whatsapp)}}" class="form-control  @error('No_Whatsapp') is-invalid @enderror" autocomplete="false" placeholder="Isi No Whatsapp salah satu Orang Tua/Wali Aktif"/>
                    <small class="text-secondary">Nomor Whatsapp salah satu Orang Tua/Wali (Aktif)</small>
                  </div>
          

<!-- bs-custom-file-input -->
<script src="{{asset('template_admin/')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>


@endsection