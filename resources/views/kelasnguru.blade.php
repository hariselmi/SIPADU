@extends('layout.template')
@section('title','Kelas N Guru')

@section('content')

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary  mb-3"  data-bs-toggle="modal" data-bs-target="#tambahkelas"><i class="fa fa-plus"></i>
    Tambah Kelas
</button>


<table
    id="example1" class="table table-bordered table-striped table-hover ms-2"
    >
    <thead>
        <tr>
            <th width="100px">No</th>
            <th width="200px">Kelas</th>
            <th width="350px">Wali Kelas</th>
            {{-- <th width="350px">Ketua Kelas</th> --}}
            <th width="350px">Action</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($kelasnguru as $data)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->Nama_Kelas }}</td>
            <td>{{ $data->guru->Nama_Lengkap }}</td>
            <td> 
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dataanggotakelas{{$data->ID_Kelas}}">
                    Anggota
                </button>
            </td>
            </tr>
        @endforeach
    </tbody>
    </table>


<!-- Modal -->
@foreach ($kelasnguru as $data)
    <div class="modal fade" id="dataanggotakelas{{$data->ID_Kelas}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dataanggotakelas{{$data->ID_Kelas}}" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Anggota Kelas {{$data->Nama_Kelas}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
            <table
            id="example2" class="table table-bordered table-striped table-hover"
            >
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Peserta Didik</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No Whatsapp</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($kelasnguru as $data)
                    <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>
                        @foreach ($data->kelasanggota as $t)
                        {{ $data->kelasanggota -> NIS }}
                        @endforeach
                    </td>
                    {{-- <td>{{ $data->kelasanggota -> Nama_Lengkap }}</td>
                    <td>{{ $data->kelasanggota -> Tempat_Lahir }}</td>
                    <td>{{ $data->kelasanggota -> Tanggal_Lahir }}</td>
                    <td>{{ $data->kelasanggota -> No_Whatsapp }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
            </table>


            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    @endforeach

{{-- 
    @foreach ($peserta_didik as $data)
             --}}
        
    <div class="modal fade" id="tambahkelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header bg-info">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ms-1">
            <form method="POST" action="kelas/insert" enctype="multipart/form-data">
                @csrf
                  <div class="mb-2 ps-2">
                    <label for="Nama_Kelas" class="form-group">Nama Kelas</label>
                    <input type="text" class="form-control @error('Nama_Kelas') is-invalid @enderror mb-2" id="Nama_Kelas" name="Nama_Kelas" value="{{old('Nama_Kelas')}}" placeholder="Isi nama kelas" >
                    <div class="invalid-feedback">
                        isi nama kelas
                        
                  </div>
                </div>


          </div>
          <div class="modal-footer justify-content-between">
            <button name="reset" type="reset" class="btn btn-danger">RESET </button>
            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Tutup</button>
            <button class="btn btn-primary">SIMPAN </button>
        </form>
          </div>
        </div>
      </div>
    </div>
    {{-- @endforeach --}}
<!-- /.modal -->

<script>
    $(document).ready(function() {
        $('#example2').DataTable( {
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

@endsection

