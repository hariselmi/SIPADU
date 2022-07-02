@extends('layout.template')
@section('title','Anggota Kelas')

@section('content')

<table
    id="example1" class="table table-bordered table-striped table-hover"
    >
    <thead>
        <tr>
            <th width="100px">No</th>
            <th width="200px">Kelas</th>
            <th width="350px">Wali Kelas</th>
            <th width="350px">Ketua Kelas</th>
            <th width="350px">Action</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($kelasanggotas as $data)
            <tr>
                <td>{{ $data-> NIS }}</td>
                <td>{{ $data-> Nama_Lengkap }}</td>
                <td>{{ $data-> Tempat_Lahir }}</td>
                <td>{{ $data->anggota-> Nama_Kelas }}</td>
                <td>{{ $data-> No_Whatsapp }}</td>
            <td> 
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dataanggotakelas{{$data->ID_Kelas}}">
                    Anggota
                </button>
            </td>
            </tr>
        @endforeach
    </tbody>
    </table>

@endsection