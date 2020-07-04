@extends('adminlte.master')
@section('content')
<div class="ml-2 ">
    <h1>LaravelLab</h1>
<a href="/pertanyaan" class="btn btn-primary mb-2">Home</a>
            <table class="table table-bordered">
            <thead>
                <tr>
                <th>ID</th>
                <th>Jawaban</th>
               </tr>
            </thead>
            <tbody>
                @foreach ($penjawab as $key => $penjawab)
            <tr>
            <td> {{ $key + 1}} </td> 
            <td> {{ $penjawab->jawab }}</td>   
           </tr>                  
             @endforeach
           </tbody>
                </table>
</div>               
@endsection