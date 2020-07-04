@extends('adminlte.master')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h1 class="card-title">Edit? </h1>
  </div>

<div class="card-body">
<div class=" ml-4  col-sm-6">
<form role="form" action =" /pertanyaan/{{ $pertanyaan->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="judul">Judul Pertanyaan</label>
    <input type="text" class="form-control " placeholder="Enter Judul Pertanyaan" name="judul" value="{{ $pertanyaan -> judul }}" id="judul">
      </div>
      <div class="form-group ">
        <label for="isi">isi Pertanyaan</label>
        <input type="text" class="form-control " placeholder="Enter isi Pertanyaan" name="isi" value="{{ $pertanyaan -> isi }}" id="isi">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>
</div>
@endsection