@extends('base')
@section('jobs','active')
@section('content')
<form action="{{route('jobsUpdate')}}" method="POST">
  @csrf
  <div class="form-group">
  <input type="hidden" name="id" value="{{ $jobs->id_jobs }}"/>
    <label>Nama Kategori</label>
    <input type="text" name="nama" value="{{$jobs->name}}" class="form-control" placeholder="...">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection