@extends('layout.template')
@section('title','Kelas')

@section('content')

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#tambahkelas"><i class="fa fa-plus"></i>
    Tambah Kelas
</button>

<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahsiswakelas">
    <i class="fa fa-plus"></i> Anggota Kelas
</button>



<table
    id="example1" class="table table-bordered table-striped table-hover ms-2"
    >
    <thead>
        <tr>
            <th width="100px">No</th>
            <th width="200px">Kelas</th>
            <th width="350px">Wali Kelas</th>
            <th width="250px">Jumlah Siswa</th>
            <th width="350px">Action</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($kelas as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->Nama_Kelas }}</td>
            <td>{{ $data->guru->Nama_Lengkap }}</td>
            <td class="text-center">{{ $data->pesertadidik->count() }}</td>
            <td> 
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dataanggotakelas{{$data->id}}">
                    Anggota
                </button>
            </td>
            
        </tr>
        @endforeach
    </tbody>
    </table>

<!-- /.Modal Tambah Kelas -->
    <div class="modal fade" id="tambahkelas" tabindex="-1" aria-labelledby="tambahkelas" aria-hidden="true">
    <div class="modal-dialog modal-xl">>
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h4 class="modal-title">TAMBAH KELAS</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/kelas/insert" class="needs-validation" novalidate enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                <label for="Nama_Kelas">Nama Kelas</label>
                <input type="text" id="Nama_Kelas" name="Nama_Kelas" class="form-control @error('Nama_Kelas') is-invalid @enderror" value="{{old('Nama_Kelas')}}"  autocomplete="false" placeholder="Isi Nama Kelas"/>
                @error('Nama_Kelas')
                <span class="text-danger">{{ $message }}</span> 
                @enderror
                </div>
            </div>

                <div class="col-md-6">
                    <div class="form-group ">
                    <label for="guru_id">Wali Kelas</label>
                    <select class="form-select @error('guru_id') is-invalid @enderror" id="guru_id" name="guru_id" >
                        <option selected disabled value>Wali Kelas</option>
                        @foreach ($guru as $wali_kelas)
                        <option value="{{ $wali_kelas->id }}" >{{ $wali_kelas->Nama_Lengkap }}</option>
                        @endforeach 
                    </select>
                    @error('guru_id')
                    <span class="text-danger">{{ $message }}</span> 
                    @enderror
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
<!-- /.modal -->

<!-- Modal Anggota Kelas -->
    @foreach ($kelas as $data)
    <div class="modal fade" id="dataanggotakelas{{$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dataanggotakelas{{$data->ID_Kelas}}" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Anggota Kelas {{$data->Nama_Kelas}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <table
            id="siswa" class="table table-bordered table-striped table-hover"
            >
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th width="200px">NIS</th>
                    <th width="300px">Nama Peserta Didik</th>
                    <th width="300px">Tempat Lahir</th>
                    <th width="200px">Tanggal Lahir</th>
                    <th width="200px">No Whatsapp</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($data->pesertadidik as $siswa)
                    <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $siswa->NIS }}</td>
                    <td>{{ $siswa->Nama_Lengkap }}</td>
                    <td>{{ $siswa->Tempat_Lahir }}</td>
                    <td>{{ $siswa->Tanggal_Lahir }}</td>
                    <td>{{ $siswa->No_Whatsapp }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
<!-- /.modal -->

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    @endforeach

<!-- Modal Anggota Kelas -->

<div class="modal fade" id="tambahsiswakelas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahsiswakelas" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
        <div class="modal-header bg-primary">
        <h5 class="modal-title" id="staticBackdropLabel">Tambahkan siswa ke kelas</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            {{-- <div class="col-md-6">
                <div class="form-group ">
                <label for="pilihkelas"> Kelas</label>
                <select class="form-select bg-light @error('guru_id') is-invalid @enderror" id="pilihkelas" name="pilihkelas" >
                    <option selected disabled value>Kelas</option>
                    @foreach ($kelas as $data)
                    <option value="{{ $data->id }}" >{{  $data->Nama_Kelas }}</option>
                    @endforeach 
                </select>
                @error('guru_id')
                <span class="text-danger">{{ $message }}</span> 
                @enderror
                </div> --}}

        <table
        id="siswa" class="table table-bordered table-striped table-hover"
        >
        <thead>
            <tr>
                <th width="80px">No</th>
                {{-- <th width="80px">Checkbox</th> --}}
                <th width="200px">NIS</th>
                <th width="200px">Kelas</th>
                <th width="300px">Nama Peserta Didik</th>
                <th width="300px">Tempat Lahir</th>
                <th width="200px">Tanggal Lahir</th>
                <th width="200px">No Whatsapp</th>
            </tr>
        </thead>
        
        <tbody>
            <form method="POST" action="/kelas/edit" class="needs-validation" novalidate enctype="multipart/form-data">
                @method('put')
                @csrf
            @foreach($peserta_didik as $siswa)
                <tr>
                <td>{{ $loop->iteration }} </td>
                {{-- <td><input  type="checkbox" value="" id="checkboxkelas"></td> --}}
                <td>{{ $siswa->NIS }}</td>
                <td><select class="form-select bg-light @error('guru_id') is-invalid @enderror" id="pilihkelas" name="pilihkelas" >
                    <option selected disabled value>Pilih Kelas</option>
                    @foreach ($kelas as $data)
                    <option value="{{ $data->id }}" >{{  $data->Nama_Kelas }}</option>
                    @endforeach
                <td>{{ $siswa->Nama_Lengkap }}</td>
                <td>{{ $siswa->Tempat_Lahir }}</td>
                <td>{{ $siswa->Tanggal_Lahir }}</td>
                <td>{{ $siswa->No_Whatsapp }}</td>
                </tr>
            @endforeach
        </tbody>

        </table>
<!-- /.modal -->

        </div>
        <div class="modal-footer justify-content-between">
            <button name="submit" type="reset" class="btn btn-danger" value=Submit>RESET </button>
            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Tutup</button>
            <button class="btn btn-primary">SIMPAN </button>
        </div>
    
    </div>
    </div>
</form>
</div>  

<script>
    $(document).ready(function() {
        $('#siswa').DataTable( {
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

