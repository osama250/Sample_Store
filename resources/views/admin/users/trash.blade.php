@extends('admin.layout.main')
@section('title', 'Trash-Users')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="card">

              <div class="card-header">
                <div class="jumbotron container">
                    <h2> Trash-Users</h2>
                    <p class="card-text">  <span><a href="{{ route('Users.index')}}">
                        back</a> </span> Users If Want Back
                    </p>
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
                                    <a class="btn btn-warning" style="margin-bottom: 5px"
                                        href="{{ route('user.back.fromtrash' , $user->id ) }}">
                                        <i class="fas fa fa-trash-alt"></i>  Back
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
