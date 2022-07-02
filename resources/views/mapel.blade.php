@extends('layout.template')
@section('title','Mata Pelajaran')

@section('content')

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#tambahmapel"><i class="fa fa-plus"></i>
    Tambah Kelas
</button>



<table
    id="datamapel" class="table table-bordered table-striped table-hover ms-2"
    >
    <thead>
        <tr>
            <th width="20px">No</th>
            <th width="1000px">Nama Mata Pelajaran</th>
            <th width="500px">Action</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($Mapel as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->Nama_Mapel }}</td>
            <td> 
                <button type="button" class="btn btn-primary" data-bs-toggle="modal">
                    Edit
                </button>
            </td>
            
        </tr>
        @endforeach
    </tbody>
    </table>

<!-- /.Modal Tambah Kelas -->
    <div class="modal fade" id="tambahmapel" tabindex="-1" aria-labelledby="tambahmapel" aria-hidden="true">
    <div class="modal-dialog modal-xl">>
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h4 class="modal-title">TAMBAH MATA PELAJARAN</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/mapel/insert" class="needs-validation" novalidate enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                <label for="Nama_Mapel">Nama Mata Pelajaran</label>
                <input type="text" id="Nama_Mapel" name="Nama_Mapel" class="form-control @error('Nama_Mapel') is-invalid @enderror" value="{{old('Nama_Mapel')}}"  autocomplete="false" placeholder="Isi Nama Mata Pelajaran"/>
                @error('Nama_Mapel')
                <span class="text-danger">{{ $message }}</span> 
                @enderror
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
<!-- /.modal -->

<script>
    $(document).ready(function() {
        $('#datamapel').DataTable( {
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

