@extends('layout.template')
@section('title','Data Guru')

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

              <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahguru">
                Tambah Guru
              </button>

              
                {{-- data tabel siswa --}}
              <table
                id="example1"
                class="table table-bordered table-striped table-hover"
              >
              <thead>
                <tr>
                    <th>Action</th>
                    <th>NIG</th>
                    <th>Foto Guru</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Mandarin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>No Whatsapp</th>
                    <th>Alamat</th>
                    <th>Memohon Ketuhanan</th>
                    <th>Vegetarian</th>
                    <th>Tempat Memohon Ketuhanan</th>
                    <th>Tanggal Memohon Ketuhanan</th>
                    <th>Tanggal Bergabung</th>

                </tr>
              </thead>
              
              <tbody>
                  @foreach ($guru as $data)
                    <tr>
                    <td>
                      <button type="button" class="btn mt-1 btn-warning" data-bs-toggle="modal" data-bs-target="#edit{{$data->NIG}}"><i class="fas fa-edit"></i>
                        Edit
                      </button>

                      <button type="button" class="btn mt-1 btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$data->NIG}}">
                        Hapus
                      </button>
                    </td>
                        
                        
                      <td>{{ $data->NIG}}</td>
                      <td><img src="{{url('foto_guru/'.$data->Foto_Guru)}}" width="50px"></td>
                      <td>{{ $data->Nama_Lengkap}}</td>
                      <td>{{ $data->Nama_Mandarin}}</td>
                      <td>{{ $data->Tempat_Lahir}}</td>
                      <td>{{ $data->Tanggal_Lahir}}</td>
                      <td>{{ $data->Jenis_Kelamin}}</td>
                      <td>{{ $data->Agama}}</td>
                      <td>{{ $data->Status}}</td>
                      <td>{{ $data->No_Whatsapp}}</td>
                      <td>{{ $data->Alamat}}</td>
                      <td>{{ $data->Memohon_Ketuhanan}}</td>
                      <td>{{ $data->Vegetarian}}</td>
                      <td>{{ $data->Tempat_Memohon_Ketuhanan}}</td>
                      <td>{{ $data->Tanggal_Memohon_Ketuhanan}}</td>
                      <td>{{ $data->created_at}}</td>

                    </tr>
                  @endforeach
              </tbody>
            </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

<!-- /.Modal Tambah Guru -->
  <div class="modal fade" id="tambahguru" tabindex="-1" aria-labelledby="tambahguru" aria-hidden="true">
    <div class="modal-dialog modal-xl">>
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h4 class="modal-title">TAMBAH GURU</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="/guru/insert" class="needs-validation" novalidate enctype="multipart/form-data">
              @csrf
            <div class="container">
                  <H6 class="bg-primary text-center col-4 py-1">Nomor Induk Guru</H6>
                  <input type="text" class="form-control col-4 text-danger text-center" id="NIG" name="NIG" value="{{$nomor}}" readonly>

                
          </div>
            <section class="mt-2" style="background-color: #cfcfcf;">
              <h3 class="text-center py-2" style="color: #800080;">DATA RINCIAN PENDIDIK</h3> 
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

            <div class="modal-footer justify-content-between">
            <button name="submit" type="reset" class="btn btn-danger" value=Submit>RESET </button>
            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Tutup</button>
            <button class="btn btn-primary">SIMPAN </button>
          </div>
        </form>
          
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </div>
  </div>
<!-- /.modal -->

  {{-- Modal Hapus Guru --}}
        <!-- /. alert modal -->
        <!-- Modal -->
        @foreach ($guru as $data)
            
        
        <div class="modal fade" id="delete{{$data->NIG}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog ">
            <div class="modal-content">
              <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data {{$data->Nama_Lengkap}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body ms-1">
                <table class="table-center">
                  <th width="150px"> </th>
                  <th width="30px"></th>
                  <th width="300px"> </th>
                  </thead>
  
                  <tbody>
                    <tr><td> Nama Lengkap </td>
                    <td> : </td>
                    <td> {{$data->Nama_Lengkap}} </td></tr>
                  
                    <tr><td>  NIG </td>
                    <td> : </td>
                    <td> {{$data->NIG}} </td></tr>
                    
                    <tr><td>  Tempat, Tanggal Lahir </td>
                    <td> : </td>
                    <td> {{ $data->Tempat_Lahir}}, {{$data->Tanggal_Lahir}} </td></tr>
  
                    <tr><td>  Jenis Kelamin </td>
                    <td> : </td>
                    <td> {{$data->Jenis_Kelamin}} </td></tr>
                    
                    <tr><td>  Agama </td>
                    <td> : </td>
                    <td> {{$data->Agama}} </td></tr>
                    
                    <tr><td>  Status </td>
                    <td> : </td>
                    <td> {{$data->Status}} </td></tr>
  
                    <tr><td>  No Whatsapp </td>
                    <td> : </td>
                    <td> {{$data->No_Whatsapp}} </td></tr>
  
                    <tr><td>  Foto </td>
                      <td> : </td>
                      <td> <img src="{{url('foto_guru/'.$data->Foto_Guru)}}" width="100px"> </td></tr>
                    
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="/guru/delete/{{$data->NIG}}" type="button" class="btn btn-danger">HAPUS</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
  <!-- /.modal -->

<!-- /.Modal Edit Guru -->
  @foreach ($guru as $data)
      
  
    <div class="modal fade" id="edit{{$data->NIG}}" tabindex="-1" aria-labelledby="editdatasiswa" aria-hidden="true">
    <div class="modal-dialog modal-xl">>
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h4 class="modal-title">EDIT DATA GURU</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </button>
          </div>
          <div class="modal-body">

              <section>
              <h5 class="py-2 ps-2 text-center" style="background-color: #00ff00;">DATA GURU</h5>
              </section>
          
              <form method="POST" action="guru/edit/{{$data->NIG}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-2">
                  <label for="NIS" class="form-group">NIG</label>
                  <input type="number" class="form-control" id="NIS" name="NIS" value="{{old('NIS', $data->NIG)}}" readonly>
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
                        <input type="date" id="Tanggal_Lahir" name="Tanggal_Lahir"  class="form-control"  value="{{old('Tanggal_Lahir', $data->Tanggal_Lahir)}}"/>
                      </div>
                    </div>
                  
                    <div class="form-group col-md-6 mb-2">
                      <label for="Jenis_Kelamin">Jenis Kelamin</label>
                      <select class="form-control" id="Jenis_Kelamin" name="Jenis_Kelamin" value="{{old('Jenis_Kelamin', $data->Tanggal_Lahir)}}" >
                        <option selected disabled value>Jenis Kelamin</option>
                        <option value="Laki-Laki" @if($data->Jenis_Kelamin == "Laki-Laki") selected @endif>Laki-Laki</option>
                        <option value="Perempuan" @if($data->Jenis_Kelamin == "Perempuan") selected @endif>Perempuan</option>
                      </select>
                      </div>
                  
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="Agama">Agama</label>
                        <select class="form-control" id="Agama" name="Agama" >
                          <option selected disabled value>Agama</option>
                          <option value="Buddha Maitreya" @if($data->Agama == "Buddha Maitreya") selected @endif>Buddha Maitreya</option>
                          <option value="Buddha Umum" @if($data->Agama == "Buddha Umum") selected @endif>Buddha Umum</option>
                          <option value="Kong Hu Cu" @if($data->Agama == "Kong Hu Cu") selected @endif>Kong Hu Cu</option>
                          <option value="Islam" @if($data->Agama == "Islam") selected @endif>Islam</option>
                          <option value="Kristen" @if($data->Agama == "Kristen") selected @endif>Kristen</option>
                          <option value="Katolik" @if($data->Agama == "Katolik") selected @endif>Katolik</option>
                        </select>
                      </div>
                    </div>

                  </div> 
          
                  <div class="col-md-6">
                    <div class="form-group ">
                      <label for="Status">Status</label>
                      <select class="form-select @error('Status') is-invalid @enderror" id="Status" name="Status" >
                        <option selected disabled value>Status</option>
                        <option value="Guru" @if($data->Status == "Guru") {{ 'selected' }} @endif>Guru</option>
                        <option value="Admin"@if($data->Status == "Admin") {{ 'selected' }} @endif>Admin</option>
                      </select>
                      @error('Agama')
                      <span class="text-danger">{{ $message }}</span> 
                      @enderror
                    </div>
                  </div>
        
                  <div class="col-md-6">
                    <div class="form-group">
                  <label for="No_Whatsapp">Nomor Whatsapp</label>
                  <input type="number" id="No_Whatsapp" name="No_Whatsapp" value="{{old('No_Whatsapp', $data->No_Whatsapp)}}" class="form-control  @error('No_Whatsapp') is-invalid @enderror" autocomplete="false" placeholder="Isi No Whatsapp salah satu Orang Tua/Wali Aktif"/>
                  <small class="text-secondary">Nomor Whatsapp salah satu Orang Tua/Wali (Aktif)</small>
                </div>

                  <div class="form-group mb-3">
                    <label for="Alamat">Alamat</label>
                    <input type="text" id="Alamat" name="Alamat" class="form-control" value="{{old('Alamat', $data->Alamat)}}" autocomplete="false" placeholder="Isi alamat sekarang | Komplek Tempat Tinggal, Blok, Jalan "  />
                  </div>
                  
                  {{-- <div class="row">
                    <div class="col-md-6">
                      <label class="form-label" for="inputImage">Pas Foto Peserta Didik:</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="image"
                        class="form-control @error('image') is-invalid @enderror">
                    <small>Upload File Pas Foto Maksimal 2MB</small>
                    @error('image') <span class="text-danger">{{ $massage }}</span> @enderror <br>
                    
                    </div> --}}

                  <div class="mb-3 col-md-6">
                    <img src="{{url('foto_guru/'.$data->Foto_Guru)}}" width="150px">
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
                        <option value="Iya" @if($data->Memohon_Ketuhanan == "Iya") selected @endif>Iya</option>
                        <option value="Tidak" @if($data->Memohon_Ketuhanan == "Tidak") selected @endif>Tidak</option>
                      </select>
                    </div>
          
                    <div class="form-group col-md-6 mb-2">
                      <label for="Vegetarian">Apakah Sudah bervegetarian?</label>
                      <select class="form-control" id="Vegetarian" name="Vegetarian">
                        <option selected disabled value>Apakah Sudah bervegetarian?</option>
                        <option value="Iya" @if($data->Vegetarian == "Iya") selected @endif>Iya</option>
                        <option value="Tidak" @if($data->Vegetarian == "Tidak") selected @endif>Tidak</option>
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
                        <input type="date" id="Tanggal_Memohon_Ketuhanan" name="Tanggal_Memohon_Ketuhanan" value="{{old('Tanggal_Memohon_Ketuhanan', $data->Tanggal_Memohon_Ketuhanan)}}" class="form-control" />
                        <small class=text-secondary>jika lupa diperbolehkan kurang lebih tanggal berapa?</small>
                      
                      </div>
                    </div>
                  </div>

            <div class="modal-footer justify-content-between">
            <button name="submit" type="reset" class="btn btn-danger" value=Submit>RESET </button>
            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Tutup</button>
            <button class="btn btn-primary">SIMPAN </button>
          </div>
        </form>
          
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </div>
  </div>
  @endforeach
<!-- /.modal -->

<!-- Page specific script -->
<script>
$(document).ready(function() {
    $('#example1').DataTable( {
        scrollY: 500,
        scrollX: true,
        buttons: [
                "csv",
                "excel",
                {
                    extend: "pdfHtml5",
                    text: "PDF",
                    pageSize: "LEGAL",
                    orientation: "landscape",
                    title: "Daftar Pendaftaran Online",
                    exportOptions: {
                        columns: ":visible",
                        orthogonal: "print",
                    },
                },
                "print",
                "colvis",
            ],
            dom:
                "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row'<'col-md-5'i><'col-md-7'p>>",
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"],
            ],
    } );
} );
      </script>
  </section>

<script>
$('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
</script>
      
@endsection

