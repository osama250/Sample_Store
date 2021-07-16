@extends('admin.layout.main')
@section('title', 'Trash-Types')

@section('content')

<div class="content-wrapper">
    <div class="conttainer">
        <div class="card">
            <div class="card-header">
                <div class="jumbotron container">
                    <h2> Trash-Types </h2>
                    <p class="card-text">  <span><a href="{{ route('Types.index')}}">
                        back</a> </span>  Types If Want Back 
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
                                <a class="btn btn-warning" style="margin-bottom: 5px"
                                    href="{{ route('type.back.fromtrash' , $type->id ) }}">
                                    <i class="fas fa fa-trash-alt"></i>   Back
                                </a>                                                                                           
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
