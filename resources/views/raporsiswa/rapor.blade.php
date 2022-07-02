@extends('layout.template')
@section('title','Nilai Kelas')

@section('content')

<!-- Button trigger modal -->

<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Entry Nilai Rapor </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
        <div class="col-md-12">
            <table class="table" style="margin-top: -10px;">
                <tr>
                    <td>Nama Kelas</td>
                    <td>:</td>
                    <td>{{$kelas->Nama_Kelas}}</td>
                </tr>
                <tr>
                    <td>Wali Kelas</td>
                    <td>:</td>
                    <td>{{ Get_field::get_data($kelas->guru_id, 'guru', 'Nama_Lengkap') }}</td>
                </tr>
                <tr>
                    <td>Jumlah Siswa</td>
                    <td>:</td>
                    <td>{{$jumlah_siswa}}</td>
                </tr>

                @php
                    $bulan = date('m');
                    $tahun = date('Y');
                @endphp

                <tr>
                    <td>Tahun Pelajaran</td>
                    <td>:</td>
                    <td>
                        <select id="tahun_pelajaran_id" nama="tahun_pelajaran_id" onchange="get_nilai();">
                        @foreach($tahun_ajaran as $value)
                            
                            <option value="{{$value->id}}">{{$value->nama}}</option>
                            @endforeach

                        </select>
                    </td>
                </tr>
            </table>
            <hr>
        </div>

</div>  


<div id="load_nilai"></div>

        
{{-- <script>
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
          </script> --}}


<script type="text/javascript">
function get_nilai() {
  var url = "/rapor-get-nilai";

  
  // $.get(url);

  $.ajax({
    type: "POST",
    url: url,
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    data: {
        kelas_id : '{{$kelas->id}}',
        tahun_pelajaran_id : $('#tahun_pelajaran_id').val(),
    },
    success: function (data) {
      
        $("#load_nilai").html(data);

      
    },
  });
}

get_nilai();
</script>

@endsection

