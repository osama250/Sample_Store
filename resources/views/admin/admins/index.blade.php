@extends('admin.layout.main')
@section('title', 'All-Admins')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="card">

              <div class="card-header">
                <div class="jumbotron container">
                    <h2 > All-Users</h2>
                    <a class="text-center btn btn-primary" href="{{  route('Admins.create')}}">
                        <i class="fas fa-plus"></i> Create-Admin
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
                    <th>Name</th>
                    <th> Email </th>
                    <th>Options </th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ( $admins as $admin )
                        <tr>
                            <td> {{ $i++  }}</td>
                            <td> {{ $admin->name }}  </td>
                            <td> {{ $admin->email }}  </td>
                        @if ( $admin->id != 1 )
                          <td>
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-danger" style="margin-bottom: 5px"
                                        href="{{ route('Admins.destroy' , $admin->id ) }}">
                                        <i class="fas fa fa-trash-alt"></i>   Delete
                                    </a>
                                </div>
                            </div>
                          </td>
                        @endif
                        </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#Num</th>
                    <th>Name</th>
                    <th> Email </th>
                    <th>Options </th>
                  </tr>
                  </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
