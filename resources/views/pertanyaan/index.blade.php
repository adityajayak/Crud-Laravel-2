@extends('adminlte.master')
@section('content')
<div class="ml-2 ">
    <h1>LaravelLab</h1>
<a href="/create" class="btn btn-primary mb-2">Create New Question</a>
            <table class="table table-bordered">
            <thead>
                <tr>
                <th>ID</th>
                <th>Judul Pertanyaan</th>
                <th>Isi Pertanyaan</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pertanyaan as $key => $pertanyaan)
            <tr>
            <td> {{ $key + 1}} </td> 
            <td> {{ $pertanyaan->judul }}</td>   
            <td> {{ $pertanyaan->isi }}</td>   
            <td><a href="/pertanyaan/{{ $pertanyaan -> id }}/show" class="btn btn-sm btn-default">Show</a>
                <a href="/pertanyaan/{{ $pertanyaan -> id }}" class="btn btn-sm btn-default">Answer</a>
                <a href="/pertanyaan/{{ $pertanyaan -> id }}/edit" class="btn btn-sm btn-default">Edit</a>
           <form action="/pertanyaan/{{ $pertanyaan->id }}" method="post" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
        </form>
            </td>
            </tr>                  
             @endforeach
           </tbody>
                </table>
</div>               
@endsection