@extends('admin.layout.main')
@section('title', 'All-Orders')

@section('content')

<div class="content-wrapper">
    <div class="container">
      <div class="card">

        <div class="card-header">
            <div class="jumbotron container">
                <h2> All-Orders </h2>
                {{-- <a class="text-center btn btn-warning" href="{{ route('Orders.index') }}">
                    <i class="fas fa-trash"></i> Trash-Orders
                </a> --}}
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
          <th> UserName </th>
          <th> Orders </th>
          <th>Options </th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $users as $user )
              <tr>
                  <td> {{ $i++  }}</td>
                  <td> {{ $user->name }}     </td>
                  <td>
                    @foreach ( $prodcuts as $prodcut )
                        @foreach ( $user->my_orders as $order_user )
                            @if ( $prodcut->id == $order_user->id  )
                                {{ $prodcut->name }} -
                            @endif
                            @if (  $order_user->id == null  )
                                    not
                            @endif
                        @endforeach
                    @endforeach
                  </td>
                  <td>
                      <div class="row">
                      <div class="col">
                          <a class="btn btn-danger" style="margin-bottom: 5px"
                              href="{{ route('Orders.destroy' , $user->id ) }}">
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
            <th> UserName </th>
            <th> Orders </th>
            <th>Options </th>
        </tr>
        </tfoot>
      </table>
    </div>
      </div>
    </div>
</div>
@endsection
