@extends('admin.layout.main')
@section('title', 'All-Category')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="card">

              <div class="card-header">
                <div class="jumbotron container">
                    <h2> All-Categories</h2>
                    <a class="text-center btn btn-primary" href="{{ route('Category.create') }}">
                        <i class="fas fa-plus"></i> Create-Category
                    </a>
                    <a class="text-center btn btn-warning" href="{{ route('categories.trashed') }}">
                    <i class="fas fa-trash"></i> Trash-Category
                    </a>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert"
                                style="margin-top: 10px">
                                {{$message}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
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
                    <th> Image </th>
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
                                @if ($category->photo == Null )
                                        {{'No Hvae Image'}}
                                @else
                                    <img src="/uploads/categories/{{$category->photo}}"
                                        alt="{{$category->photo}}" class="img-size-64">
                                @endif
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a class="btn btn-success" style="margin-bottom: 5px"
                                            href="{{ route('Category.edit' , $category->id ) }}">
                                            <i class="fas fa fa-edit"></i>    Edit
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="btn btn-danger" style="margin-bottom: 5px"
                                            href="{{ route('delete.category' , $category->id ) }}">
                                            <i class="fas fa fa-trash-alt"></i>   Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#Num</th>
                    <th>Name</th>
                    <th> Description</th>
                    <th> Image </th>
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
