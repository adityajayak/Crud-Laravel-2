@extends('adminlte.master')

@section('content')
<div class="ml-2 ">
    <h1>LaravelLab</h1>
<a href="/pertanyaan" class="btn btn-primary mb-2"> Back Home</a> <a href="/penjawab" class="btn btn-primary mb-2"> See Answer</a>
            <table class="table table-bordered">
            <thead>
                <tr>
                <th>Judul</th>
                <th>isi</th>
                <th>Time Create</th>
                </tr>
            </thead>
            <tbody>
                 <tr>
                 <td> {{ $pertanyaan->judul }}</td>   
                <td> {{ $pertanyaan->isi }}</td>	
                <td> {{ $pertanyaan -> created_at }}</td>  
                </tr>                  
            </table>
           </tbody>
        </div>
    </div>
    </div>
@endsection