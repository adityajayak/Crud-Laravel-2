@extends('adminlte.master')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h1 class="card-title">Question? </h1>
  </div>

<div class="card-body">
<div class=" ml-4  col-sm-6">
<form action =" /pertanyaan" method="POST">
    @csrf
    <div class="form-group">
        <label for="judul">Judul Pertanyaan</label>
        <input type="text" class="form-control " placeholder="Enter Judul Pertanyaan" name="judul" id="judul">
      </div>
      <div class="form-group ">
        <label for="isi">isi Pertanyaan</label>
        <input type="text" class="form-control " placeholder="Enter isi Pertanyaan" name="isi" id="isi">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@endsection