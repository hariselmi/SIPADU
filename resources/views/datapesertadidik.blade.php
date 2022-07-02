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
            <!-- Small boxes (Stat box) -->
            {{-- <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>{{ $peserta_didik->count() }}</h3>
      
                    <p>Jumlah Peserta Didik</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div> --}}

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">

              <button type="button" class="btn btn-primary  mb-3"  data-bs-toggle="modal" data-bs-target="#tambahsiswa"><i class="fa fa-plus"></i>
                Tambah Peserta Didik
              </button>

              <button type="button" class="btn btn-success  mb-3"  data-bs-toggle="modal" data-bs-target="#importsiswa"><i class="fa fa-download"></i>
                Import
              </button>
              
                {{-- data tabel siswa --}}
              <table
                id="example1"
                class="table table-bordered table-striped table-hover"
              >
              <thead>
                <tr>
                    <th>Action</th>
                    <th>NIS</th>
                    <th>Foto Siswa</th>
                    <th>No Fomulir</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Mandarin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Asal Sekolah</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Memohon Ketuhanan</th>
                    <th>Vegetarian</th>
                    <th>Tempat Memohon Ketuhanan</th>
                    <th>Tanggal Memohon Ketuhanan</th>
                    <th>Nama Ayah</th>
                    <th>No HP Ayah</th>
                    <th>Agama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>No HP Ibu</th>
                    <th>Agama Ibu</th>
                    <th>No Whatsapp</th>
                    <th>Tanggal Daftar</th>

                </tr>
              </thead>
              
              <tbody>
                  @foreach ($peserta_didik as $data)
                    <tr>
                      <td>
                      <button type="button" class="btn mt-1 btn-warning" data-bs-toggle="modal" data-bs-target="#edit{{$data->NIS}}"><i class="fas fa-edit"></i>
                        Edit
                      </button>

                      <a href="/pesertadidik/fomulirpdf/{{$data->NIS}}" target="_blank" type="button" class="btn btn-info mt-1" id=printpdf name>PDF</a>
                        <button type="button" class="btn mt-1 btn-danger" data-bs-toggle="modal" data-bs-target="#delate{{$data->NIS}}"><i class="fas fa-trash"></i>
                          Hapus
                        </button>
                      </td>

                        
                      <td>{{ $data->NIS}}</td>
                      <td><img src="{{url('foto_ppdb/'.$data->Foto_Siswa)}}" width="50px"></td>
                      <td>{{ $data->No_Form}}</td>
                      <td>{{ $data->Nama_Lengkap}}</td>
                      <td>{{ $data->Nama_Mandarin}}</td>
                      <td>{{ $data->Tempat_Lahir}}</td>
                      <td>{{ $data->Tanggal_Lahir}}</td>
                      <td>{{ $data->Jenis_Kelamin}}</td>
                      <td>{{ $data->Agama}}</td>
                      <td>{{ $data->Sekolah_Asal}}</td>
                      <td>{{ $data->Kelas_Asal}}</td>
                      <td>{{ $data->Alamat}}</td>
                      <td>{{ $data->Memohon_Ketuhanan}}</td>
                      <td>{{ $data->Vegetarian}}</td>
                      <td>{{ $data->Tempat_Memohon_Ketuhanan}}</td>
                      <td>{{ $data->Tanggal_Memohon_Ketuhanan}}</td>
                      <td>{{ $data->Nama_Ayah}}</td>
                      <td>{{ $data->Agama_Ayah}}</td>
                      <td>{{ $data->No_HP_Ayah}}</td>
                      <td>{{ $data->Nama_Ibu}}</td>
                      <td>{{ $data->No_HP_Ibu}}</td>
                      <td>{{ $data->Agama_Ibu}}</td>
                      <td>{{ $data->No_Whatsapp}}</td>
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



  <!-- /.Modal Tamba Peserat didik -->
      <div class="modal fade" id="tambahsiswa" tabindex="-1" aria-labelledby="tambahsiswa" aria-hidden="true">
      <div class="modal-dialog modal-xl">>
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h4 class="modal-title">TAMBAH PESERTA DIDIK</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="/pesertadidik/insert" class="needs-validation" novalidate enctype="multipart/form-data">
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
                      <div class="form-group">
                        <label for="Sekolah_Asal"> Sekolah di</label>
                        <input type="text" id="Sekolah_Asal" name="Sekolah_Asal" class="form-control @error('image') is-invalid @enderror" value="{{old('Sekolah_Asal')}}"  placeholder="Berasal dari Sekolah? | Contoh: SD Maitreyawira"/>
                        @error('Sekolah_Asal')
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                      </div>
                    </div>
          
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="Kelas"> Kelas</label>
                        <input type="text" id="Kelas" name="Kelas" class="form-control @error('Kelas') is-invalid @enderror" value="{{old('Kelas')}}"  placeholder="Kelas sekarang | contoh: 3D"/>
                        @error('Kelas')
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                      </div>
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
                    <input type="text" id="Nama_Ortu_Aktif" name="Nama_Ortu_Aktif" class="form-control @error('Nama_Ortu_Aktif') is-invalid @enderror" value="{{old('Nama_Ortu_Aktif')}}"  autocomplete="false" placeholder="Isi salah satu nama ortu"/>
                    @error('No_Whatsapp')
                    <span class="text-danger">{{ $message }}</span> 
                    @enderror
                    <small class="text-secondary">Nama salah satu Orang Tua/Wali (Aktif)</small>
                  </div>
          
                  <div class="form-group mb-3">
                    <label for="No_Whatsapp">Nomor Whatsapp</label>
                    <input type="number" id="No_Whatsapp" name="No_Whatsapp" class="form-control @error('No_Whatsapp') is-invalid @enderror" value="{{old('No_Whatsapp')}}"  autocomplete="false" placeholder="Isi No Whatsapp salah satu Orang Tua/Wali Aktif"/>
                    @error('No_Whatsapp')
                    <span class="text-danger">{{ $message }}</span> 
                    @enderror
                    <small class="text-secondary">Nomor Whatsapp salah satu Orang Tua/Wali (Aktif)</small> <br>
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
  <!-- /.modal -->

<!-- /.Modal Edit Peserat didik -->
  @foreach ($peserta_didik as $data)
      
  
    <div class="modal fade" id="edit{{$data->NIS}}" tabindex="-1" aria-labelledby="editdatasiswa" aria-hidden="true">
    <div class="modal-dialog modal-xl">>
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h4 class="modal-title">EDIT DATA PESERTA DIDIK</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </button>
          </div>
          <div class="modal-body">

              <section>
              <h5 class="py-2 ps-2 text-center" style="background-color: #00ff00;">DATA PESERTA DIDIK</h5>
              </section>
          
              <form method="POST" action="pesertadidik/edit/{{$data->NIS}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-2">
                  <label for="NIS" class="form-group">NIS</label>
                  <input type="number" class="form-control" id="NIS" name="NIS" value="{{old('NIS', $data->NIS)}}" readonly>
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
          
                    <div class="col-md-6 ">
                      <div class="form-group">
                        <label for="Sekolah_Asal"> Sekolah di</label>
                        <input type="text" id="Sekolah_Asal" name="Sekolah_Asal" class="form-control" value="{{old('Sekolah_Asal', $data->Sekolah_Asal)}}" placeholder="Berasal dari Sekolah? | Contoh: SD Maitreyawira" />
                      </div>
                    </div>
          
                    {{-- <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-group">
                          <label for="Kelas">Kelas</label>
                          <select class="form-control" id="Kelas_ID" name="Kelas_ID" >
                            @foreach ($peserta_didik as $data)
                                
                            @if (old('Kelas_ID'))== $data->Kelas_ID
                              <option value="{{$data->Kelas_ID}}" selected>{{$data->Nama_Kelas}}</option>

                              @else
                              <option value="{{$data->Kelas_ID}}">{{$data->Kelas_ID}}</option>
                            @endif

                            @endforeach

                          </select>
                        </div>
                    </div> --}}
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
                    <img src="{{url('foto_ppdb/'.$data->Foto_Siswa)}}" width="150px">
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
                          <option value="Buddha Maitreya" @if($data->Agama_Ayah == "Buddha Maitreya") selected @endif>Buddha Maitreya</option>
                          <option value="Buddha Umum" @if($data->Agama_Ayah == "Buddha Umum") selected @endif>Buddha Umum</option>
                          <option value="Kong Hu Cu" @if($data->Agama_Ayah == "Kong Hu Cu") selected @endif>Kong Hu Cu</option>
                          <option value="Islam" @if($data->Agama_Ayah == "Islam") selected @endif>Islam</option>
                          <option value="Kristen" @if($data->Agama_Ayah == "Kristen") selected @endif>Kristen</option>
                          <option value="Katolik" @if($data->Agama_Ayah == "Katolik") selected @endif>Katolik</option>
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
                          <option value="Buddha Maitreya" @if($data->Agama_Ibu == "Buddha Maitreya") selected @endif>Buddha Maitreya</option>
                          <option value="Buddha Umum" @if($data->Agama_Ibu == "Buddha Umum") selected @endif>Buddha Umum</option>
                          <option value="Kong Hu Cu" @if($data->Agama_Ibu == "Kong Hu Cu") selected @endif>Kong Hu Cu</option>
                          <option value="Islam" @if($data->Agama_Ibu == "Islam") selected @endif>Islam</option>
                          <option value="Kristen" @if($data->Agama_Ibu == "Kristen") selected @endif>Kristen</option>
                          <option value="Katolik" @if($data->Agama_Ibu == "Katolik") selected @endif>Katolik</option>
                        </select>
                      </div>
                    </div>
                  </div>
          
                  <div class="form-group mb-3">
                    <label for="No_Whatsapp">Nomor Whatsapp</label>
                    <input type="number" id="No_Whatsapp" name="No_Whatsapp" value="{{old('No_Whatsapp', $data->No_Whatsapp)}}" class="form-control  @error('No_Whatsapp') is-invalid @enderror" autocomplete="false" placeholder="Isi No Whatsapp salah satu Orang Tua/Wali Aktif"/>
                    <small class="text-secondary">Nomor Whatsapp salah satu Orang Tua/Wali (Aktif)</small>
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


  {{-- Modal Hapus Peserta Didik --}}
        <!-- /. alert modal -->
        <!-- Modal -->
      @foreach ($peserta_didik as $data)
            
        
      <div class="modal fade" id="delate{{$data->NIS}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                
                  <tr><td>  NIS </td>
                  <td> : </td>
                  <td> {{$data->NIS}} </td></tr>
                  
                  <tr><td>  Tempat, Tanggal Lahir </td>
                  <td> : </td>
                  <td> {{ $data->Tempat_Lahir}}, {{$data->Tanggal_Lahir}} </td></tr>

                  <tr><td>  Jenis Kelamin </td>
                  <td> : </td>
                  <td> {{$data->Jenis_Kelamin}} </td></tr>
                  
                  <tr><td>  Agama </td>
                  <td> : </td>
                  <td> {{$data->Agama}} </td></tr>
                  
                  <tr><td>  Nama Ayah </td>
                  <td> : </td>
                  <td> {{$data->Nama_Ayah}} </td></tr>

                  <tr>
                  <td>  No Hp Ayah</td>
                  <td> : </td>
                  <td> {{$data->No_HP_Ayah}} </td></tr>
                  
                  <tr><td>  Agama Ayah </td>
                  <td> : </td>
                  <td> {{$data->Agama_Ayah}} </td></tr>

                  <tr><td>  Nama Ibu </td>
                  <td> : </td>
                  <td> {{$data->Nama_Ibu}} </td></tr>

                  <tr><td>  No HP Ibu </td>
                  <td> : </td>
                  <td> {{$data->No_HP_Ibu}} </td></tr>

                  <tr><td>  Agama Ibu </td>
                  <td> : </td>
                  <td> {{$data->Agama_Ibu}} </td></tr>
                  
                  <tr><td>  No Whatsapp </td>
                  <td> : </td>
                  <td> {{$data->No_Whatsapp}} </td></tr>

                  <tr><td>  Foto </td>
                    <td> : </td>
                    <td> <img src="{{url('foto_ppdb/'.$data->Foto_Siswa)}}" width="100px"> </td></tr>
                  
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <a href="/pesertadidik/delete/{{$data->NIS}}" type="button" class="btn btn-danger">HAPUS</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
  <!-- /.modal -->


<!-- bs-custom-file-input -->
<script src="{{asset('template_admin/')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script>
$('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
</script>
      
      {{-- <script>
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
        </script> --}}
@endsection