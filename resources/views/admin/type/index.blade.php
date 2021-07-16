@extends('admin.layout.main')
@section('title', 'All-Types')

@section('content')

<div class="content-wrapper">
    <div class="conttainer">
        <div class="card">
            <div class="card-header">
                <div class="jumbotron container">
                    <h2> All-Types </h2>
                    <a class="text-center btn btn-primary" href="{{ route('Type.create')}}">
                        <i class="fas fa-plus"></i> Create-Type
                    </a>
                    <a class="text-center btn btn-warning" href="{{ route('types.trash') }}">
                        <i class="fas fa-trash"></i> Trash-Types
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
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                      <th>#Num</th>
                      <th> Size </th>
                      <th> Color </th>
                      <th>Options </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ( $types as $type )
                          <tr>
                              <td> {{ $i++  }}</td>
                              <td> {{ $type->size }}  </td>
                              <td> {{ $type->color }}  </td>
                              <td>
                                  <div class="row">
                                      <div class="col">
                                          <a class="btn btn-success" style="margin-bottom: 5px"
                                            href="{{ route('Type.edit' , $type->id ) }}">
                                            <i class="fas fa fa-edit"></i>    Edit
                                          </a>
                                      </div>
                                      <div class="col">
                                        <a class="btn btn-danger" style="margin-bottom: 5px"
                                            href="{{ route('delete.type' , $type->id ) }}">
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
                        <th> Size </th>
                        <th> Color </th>
                        <th>Options </th>
                    </tr>
                    </tfoot>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
