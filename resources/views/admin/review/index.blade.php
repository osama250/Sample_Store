@extends('admin.layout.main')
@section('title', 'Trash-Reviews')

@section('content')

<div class="content-wrapper">    
    <div class="container">
      <div class="card">

            <div class="card-header">
                <div class="jumbotron container">
                    <h2> All-Reviews </h2>
                    <a class="text-center btn btn-warning" href="{{ route('review.trash') }}">
                        <i class="fas fa-trash"></i> Trash-Reviews 
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
                    <th> Content </th>
                    <th> UserName </th>
                    <th>Options </th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ( $reviews as $review )
                        <tr>
                            <td> {{ $i++  }}</td>
                            <td> {{ $review->content }}     </td>
                            <td> {{ $review->user->name }}  </td>
                            <td>
                                <div class="row">
                                <div class="col">
                                    <a class="btn btn-danger" style="margin-bottom: 5px"
                                        href="{{ route('delete.review' , $review->id ) }}">
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
                    <th> Content </th>
                    <th> UserName </th>
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
