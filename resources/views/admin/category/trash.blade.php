@extends('admin.layout.main')
@section('title', 'Trash-Category')

@section('content')

<div class="content-wrapper">    
    <div class="container">
        <div class="card">
            
              <div class="card-header">
                <div class="jumbotron container">
                    <h2> Trash-Categories</h2>                 
                    <p class="card-text">  <span><a href="{{ route('Categories.index')}}">
                        back</a> </span>  Categories If Want Back 
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
                      @foreach ( $categories as $category )
                        <tr>
                            <td> {{ $i++  }}</td>
                            <td> {{ $category->name }}  </td>
                            <td> {{ $category->description }}  </td>
                            <td>                                                                    
                                <a class="btn btn-warning" style="margin-bottom: 5px"
                                    href="{{ route('category.back.fromtrash' , $category->id ) }}">
                                    <i class="fas fa fa-baby"></i>  Back-Trash
                                </a>                             
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#Num</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Options </th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
        </div>            
    </div>        
</div>
@endsection
