@extends('layout.template')
@section('title','Pendaftaran Online')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
             <h1>Daftar Pendaftaran Online</h1>
            </div>


<!-- /.container-fluid -->
</section>

<!-- Main content -->
<!-- Adding JQuery Cdn -->
<link rel="style" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<!-- Adding JQuery Cdn -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- Adding Datatable Cdn -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-fluid">
      <div class="card">
      <!-- /.card -->

      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example" class="table-striped table-hover" style="width:100%">
            <thead>
              <tr>
                <th>No Form</th>
                <th>Nama Lengkap</th>
                <th>Nama Mandarin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Memohon Ketuhanan</th>
                <th>Tempat Memohon Ketuhanan</th>
                <th>Tanggal Memohon Ketuhanan</th>
                <th>Nama Ayah</th>
                <th>No HP Ayah</th>
                <th>Nama Ibu</th>
                <th>No HP Ibu</th>
                <th>No Whatsapp</th>
              </tr>
            </thead>

            
            <tbody>
                @foreach ($pendaftaran_online as $data)
                    <tr>
                        <td>{{ $data->No_Form}}</td>
                        <td>{{ $data->Nama_Lengkap}}</td>
                        <td>{{ $data->Nama_Mandarin}}</td>
                        <td>{{ $data->Tempat_Lahir}}</td>
                        <td>{{ $data->Tanggal_Lahir}}</td>
                        <td>{{ $data->Jenis_Kelamin}}</td>
                        <td>{{ $data->Agama}}</td>
                        <td>{{ $data->Alamat}}</td>
                        <td>{{ $data->Memohon_Ketuhanan}}</td>
                        <td>{{ $data->Tempat_Memohon_Ketuhanan}}</td>
                        <td>{{ $data->Tanggal_Memohon_Ketuhanan}}</td>
                        <td>{{ $data->Nama_Ayah}}</td>
                        <td>{{ $data->No_HP_Ayah}}</td>
                        <td>{{ $data->Nama_Ibu}}</td>
                        <td>{{ $data->No_HP_Ibu}}</td>
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


@endsection

