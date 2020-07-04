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
                </tr>
            </thead>
            <tbody>
              
                <tr>
                 <td> {{ $pertanyaan->judul }}</td>   
                <td> {{ $pertanyaan->isi }}</td>   
            
                </tr>                  
 
           </tbody>
                </table>
                <div class="col-sm-md-6">
                    <form action =" /penjawab" method="POST">
                        @csrf
                    <div class="card card-secondary">
                      <div class="card-header">
                        <h3 class="card-title">Answer</h3>
          
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="jawab"></label>
                          <input type="text" id="jawab" name="jawab" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>                  
                </div>
                </div>
                </div>
</div>

@endsection