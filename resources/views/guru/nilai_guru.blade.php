@extends('guru.template_guru')
@section('title','Nilai Kelas PG 1')

@section('content')

<!-- Button trigger modal -->

<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Entry Nilai Rapot</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
        <div class="col-md-12">
            <table class="table" style="margin-top: -10px;">
                <tr>
                    <td>Nama Kelas</td>
                    <td>:</td>
                    <td>PG 1</td>
                </tr>
                <tr>
                    <td>Wali Kelas</td>
                    <td>:</td>
                    <td>Desy Widya Permata</td>
                </tr>
                <tr>
                    <td>Jumlah Siswa</td>
                    <td>:</td>
                    <td>6</td>
                </tr>

                @php
                    $bulan = date('m');
                    $tahun = date('Y');
                @endphp
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td>
                        @if ($bulan > 6)
                            {{ 'Semester Ganjil' }}
                        @else
                            {{ 'Semester Genap' }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Tahun Pelajaran</td>
                    <td>:</td>
                    <td>
                        @if ($bulan > 6)
                            {{ $tahun }}/{{ $tahun+1 }}
                        @else
                            {{ $tahun-1 }}/{{ $tahun }}
                        @endif
                    </td>
                </tr>
            </table>
            <hr>
        </div>

</div>  

<div class="col-md-12">
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="ctr" rowspan="2">No.</th>
                <th rowspan="2">Nama Siswa</th>
                <th class="ctr" rowspan="2">NIS</th>
                <th class="ctr text-center" colspan="4">Pengetahuan</th>
                <th class="ctr text-center" colspan="4">Moral/Spiritual</th>
                <th class="ctr" rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th class="ctr">Membaca</th>
                <th class="ctr">Mendengar</th>
                <th class="ctr">Menulis</th>
                <th class="ctr">Nilai Ujian</th>
                <th class="ctr">Kebaktian</th>
                <th class="ctr">Kesopanan</th>
                <th class="ctr">Kerapian</th>
                <th class="ctr">Kerajinan</th>
            </tr>
        </thead>

        <tbody>
                <tr>
                    <td>1</td>
                    <td>Indrian Tan</td>
                    <td>2260001</td>
                    <td width="110px" ><input type="text" class="form-control " value="89"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="85"/></td>
                    <td width="110px" ><input type="text" class="form-control " value="90"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="100"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="A"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="A"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="A"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="A"/></td>
                    <td><button type="button" class="btn btn-warning mt-1" id=printpdf name>PDF</button>
                    <button class="btn btn-primary btn-sm"><i class="nav-icon fas fa-pen"></button></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Bodhi</td>
                    <td>2260002</td>
                    <td width="110px" ><input type="text" class="form-control " value="89"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="85"/></td>
                    <td width="110px" ><input type="text" class="form-control " value="90"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="100"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="A"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="A"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="A"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="A"/></td>
                    <td><button type="button" class="btn btn-warning mt-1" id=printpdf name>PDF</button>
                    <button class="btn btn-primary btn-sm"><i class="nav-icon fas fa-pen"></button></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Yodi</td>
                    <td>2260003</td>
                    <td width="110px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="110px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td><button type="button" class="btn btn-warning mt-1" id=printpdf name>PDF</button>
                    <button class="btn btn-primary btn-sm"><i class="nav-icon fas fa-pen"></button></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Indrian Tan</td>
                    <td>2260004</td>
                    <td width="110px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="110px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td><button type="button" class="btn btn-warning mt-1" id=printpdf name>PDF</button>
                    <button class="btn btn-primary btn-sm"><i class="nav-icon fas fa-pen"></button></td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>Indrian Tan</td>
                    <td>2260005</td>
                    <td width="110px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="110px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td><button type="button" class="btn btn-warning mt-1" id=printpdf name>PDF</button>
                    <button class="btn btn-primary btn-sm"><i class="nav-icon fas fa-pen"></button></td>
                </tr>

                <tr>
                    <td>6</td>
                    <td>Yanto</td>
                    <td>2260010</td>
                    <td width="110px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="110px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td><button type="button" class="btn btn-warning mt-1" id=printpdf name>PDF</button>
                    <button class="btn btn-primary btn-sm"><i class="nav-icon fas fa-pen"></button></td>
                </tr>


        </tbody>
    </table>

        
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


@endsection

