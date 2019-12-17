@extends('base')
@section('jobs','active')
@section('content')
<a href="/jobs/create" class="btn btn-primary">Tambah Data</a>
<br/><br/>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col" width="1">#</th>
            <th scope="col">Jobs</th>
            <th scope="col" width="1">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jobs as $data)
        <tr>
            <th scope="row">{{$data->id_jobs}}</th>
            <td>{{$data->name}}</td>
            <td>
                <div class="btn-group">
                    <a href="/jobs/edit/{{$data->id_jobs}}" class="btn btn-success">Edit</a>
                    <a href="/jobs/delete/{{$data->id_jobs}}" class="btn btn-danger">Hapus</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection