@extends('layout.template')
@section('title','Rapor')

@section('content')

<!-- Button trigger modal -->



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
                <a href="/rapor-kelas/{{$data->id}}">
                <button type="button" class="btn btn-primary">
                    Input Nilai
                </button>
                </a>
            </td>
            
        </tr>
        @endforeach
    </tbody>
    </table>


@endsection

