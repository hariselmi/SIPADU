@extends('layout.template')
@section('title','Pendaftaran Online')

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

<style>
  .custom-select{
    padding-left: 10px;
    padding-right: 25px;
  }
</style>

  <section class="content">
    <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>{{ $pendaftaran_online->count() }}</h3>
      
                    <p>Jumlah Peserta Didik</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <a href="#" class="btn btn-danger my-2" id="deleteAllselected">Delete Selected</a>
              <table
                id="example1"
                class="table table-bordered table-striped table-hover"
              >
              <thead>
                <tr>
                  <th><input type="checkbox" id="chkCheckAll"></th>
                  <th>Detail</th>
                  <th>No Form</th>
                  <th>Tanggal Daftar</th>
                  <th>Foto Siswa</th>
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
                  <th>Nama Orang Tua Aktif</th>
                  <th>No Whatsapp</th>
                </tr>
              </thead>
              
              <tbody>
                  @foreach ($pendaftaran_online as $data)
                    <tr id="sid{{$data->id}}">
                      <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$data->id}}">{{$data->id}}</td>
                      <td><a href="/pendaftaranonline/detailfomulir/{{$data->No_Form}}" target="_blank" type="button" class="btn btn-success">Detail</a>
                        <a href="/pendaftaranonline/fomulirpdf/{{$data->No_Form}}" target="_blank" type="button" class="btn btn-warning mt-1" id=printpdf name>PDF</a>
                        <button type="button" class="btn btn-sm btn-danger mt-1" data-bs-toggle="modal" data-bs-target="#delete{{$data->No_Form}}">
                         DELETE
                        </button>
                        @if ($data->Status == 'AKTIF')
                        <a href="/pendaftaranonline/status/{{$data->id}}" class="btn btn-sm mt-1 btn-danger">PPDB</a>
                            
                        @else
                            <a href="/pendaftaranonline/status/{{$data->id}}" class="btn btn-sm mt-1 btn-success">AKTIFKAN</a>
                        @endif
                        
                      <td>{{ $data->No_Form}}</td>
                      <td>{{ $data->created_at}}</td>
                      <td><img src="{{url('foto_ppdb/'.$data->Foto_Siswa)}}" width="50px"></td>
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
                      <td>{{ $data->Nama_Ortu_Aktif}}</td>
                      <td>{{ $data->No_Whatsapp}}</td>
                      

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
            order : [[ 1, "desc" ]]        
    } );
} );
      </script>
  </section>

  <!-- /. alert modal -->
    @foreach ($pendaftaran_online as $data)
          <div class="modal fade" aria-labelledby="delete{{$data->No_Form}}" id="delete{{$data->No_Form}}">
        <div class="modal-dialog col-6">
          <div class="modal-content">
            <div class="modal-header bg-danger">
              <h4 class="modal-title ">HAPUS DATA</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </button>
            </div>
            <div class="modal-body">
              <table class="table-center">
                <th width="200px"> </th>
                <th width="30px"></th>
                <th width="300px"> </th>
                </thead>

                <tbody>
                  <tr><td> Nama Lengkap </td>
                  <td> : </td>
                  <td> {{$data->Nama_Lengkap}} </td></tr>
                
                  <tr><td>  No Form </td>
                  <td> : </td>
                  <td> {{$data->No_Form}} </td></tr>
                  
                  <tr><td>  Tempat, Tanggal Lahir </td>
                  <td> : </td>
                  <td> {{ $data->Tempat_Lahir}}, {{$data->Tanggal_Lahir}} </td></tr>

                  <tr><td>  Jenis Kelamin </td>
                  <td> : </td>
                  <td> {{$data->Jenis_Kelamin}} </td></tr>

                  <tr><td>  Kelas Asal </td>
                    <td> : </td>
                    <td> {{$data->Kelas}} </td></tr>

                  <tr><td>  Asal Sekolah </td>
                  <td> : </td>
                  <td> {{$data->Sekolah_Asal}} </td></tr>
                  
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

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-bs-dismiss="modal">Batal</button>
              <a href="/pendaftaranonline/delete/{{$data->id}}" type="button" class="btn btn-danger">HAPUS</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach
    <!-- /.modal -->


    <script>
      $(function(e){
        $("#chkCheckAll").click(function(){
          $(".checkBoxClass").prop('checked',$(this).prop('checked'));
        });

        $("#deleteAllselected").click(function(e){
          e.preventDefault();
          var allids = [];

          $("input:checkbox[name=ids]:checked").each(function(){
            allids.push(($this).val());
          });

          $.ajax({
            url:"{{route('siswa.deleteSelected')}}",
            type :"DELETE",
            data:{
              _token:$("input[name=_token]").val(),
              ids:allids
            },
            success:function(response){
              $.each(allids, function(key,val){
                $("#sid"+val).remove();
              })
            }
          });

        })
      });
      
    </script>
@endsection

