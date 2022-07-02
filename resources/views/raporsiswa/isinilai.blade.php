

<!-- Button trigger modal -->
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
                
                @foreach($peserta_didik as $key=> $value)

                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{ $value->NIS}}</td>
                    <td>{{ $value->Nama_Lengkap}}</td>
                    <td width="110px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="110px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td width="130px" ><input type="text" class="form-control " value=""/></td>
                    <td>
                        <a href="/rapor-pdf-nilai/{{$value->id}}">
                        <button type="button" class="btn btn-warning mt-1" id=printpdf name>PDF</button></td>
                    </a>
                </tr>

                @endforeach

        </tbody>
    </table>
</div>

