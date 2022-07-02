

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
                
                @foreach($nilai as $key=> $value)

                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{ Get_field::get_data($value->siswa_id, 'pendaftaranonline', 'NIS') }}</td>
                    <td>{{ Get_field::get_data($value->siswa_id, 'pendaftaranonline', 'Nama_Lengkap') }}</td>
                    <td width="110px" ><input type="text" class="form-control " value="{{$value->membaca}}"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="{{$value->mendengar}}"/></td>
                    <td width="110px" ><input type="text" class="form-control " value="{{$value->menulis}}"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="{{$value->nilai_ujian}}"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="{{$value->kebaktian}}"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="{{$value->kesopanan}}"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="{{$value->kerapian}}"/></td>
                    <td width="130px" ><input type="text" class="form-control " value="{{$value->kerajinan}}"/></td>
                    <td>
                        <a href="/rapor-pdf-nilai/{{$value->id}}">
                        <button type="button" class="btn btn-warning mt-1" id=printpdf name>PDF</button></td>
                    </a>
                </tr>

                @endforeach

        </tbody>
    </table>
</div>

