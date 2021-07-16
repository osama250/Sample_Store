@extends('admin.layout.main')
@section('title', 'Trash-Prodcuts')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="card">

             <div class="card-header">
                <div class="jumbotron container">
                    <h2> Trash-Prodcuts</h2>                 
                    <p class="card-text">  <span><a href="{{ route('Prodcuts.index')}}">
                        back</a> </span>  Prodcuts If Want Back 
                    </p>    
                </div>
             </div>
              @php
                  $i = 1
              @endphp
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>#Num</th>
                    <th>Name</th>
                    <th> Description</th>
                    <th>Options </th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ( $prodcuts as $prodcut )
                        <tr>
                            <td> {{ $i++  }}</td>
                            <td> {{ $prodcut->name }}  </td>
                            <td> {{ $prodcut->content }}  </td>
                            <td>                                                                                                  
                                <a class="btn btn-warning" style="margin-bottom: 5px"
                                    href="{{ route('prodcut.back.fromtrash' , $prodcut->id ) }}">
                                    <i class="fas fa fa-trash-alt"></i>   Back
                                </a>                                                                                          
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#Num</th>
                    <th>Name</th>
                    <th> Description</th>
                    <th>Options </th>
                  </tr>
                  </tfoot>
                </table>                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection
