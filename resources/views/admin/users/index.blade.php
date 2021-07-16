@extends('admin.layout.main')
@section('title', 'All-Users')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="card">

              <div class="card-header">
                <div class="jumbotron container">
                    <h2 > All-Users</h2>
                    <a class="text-center btn btn-primary" href="{{  route('User.create')}}">
                        <i class="fas fa-plus"></i> Create-User
                    </a>
                    <a class="text-center btn btn-warning" href="{{ route('users.trash') }}">
                        <i class="fas fa-trash"></i> Trash-Users
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
                      @foreach ( $users as $user )
                        <tr>
                            <td> {{ $i++  }}</td>
                            <td> {{ $user->name }}  </td>
                            <td> {{ $user->email }}  </td>
                          <td>
                            <div class="row">
                              <div class="col">
                                    <a class="btn btn-primary" style="margin-bottom: 5px"
                                        href="{{ route('User.show' , $user->id ) }}">
                                        <i class="fas fa fa-eye"></i>   Detail
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="btn btn-danger" style="margin-bottom: 5px"
                                        href="{{ route('delete.user' , $user->id ) }}">
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
