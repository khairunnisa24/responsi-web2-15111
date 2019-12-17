@extends('base')
@section('employees','active')
@section('content')
<a href="/employees/create" class="btn btn-primary">Tambah Data</a>
<br/><br/>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col" width="1">#</th>
            <th scope="col">Jobs</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">E-Mail</th>
            <th scope="col">Kontak</th>
            <th scope="col">Alamat</th>
            <th scope="col" width="1">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $data)
        <tr>
            <th scope="row">{{$data->id_employees}}</th>
            <td>{{$data->id_jobs}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>
                <div class="btn-group">
                    <a href="/employees/edit/{{$data->id_employees}}" class="btn btn-success">Edit</a>
                    <a href="/employees/delete/{{$data->id_employees}}" class="btn btn-danger">Hapus</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection