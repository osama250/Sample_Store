@extends('admin.layout.main')
@section('title' , 'Add-Category' )
@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4> New-Category </h4>
                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>
                                    {{$item}}
                                </li>
                            @endforeach
                        </ul>
                    @endif
            </div>
        <div class="card-body">
            <form action="{{route('Category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1"> Name</label>
                    <input type="text" class="form-control" name="name"  placeholder="Write name..">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Write Description</label>
                    <textarea class="form-control"  rows="3" name="description"> </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Photo </label>
                    <input type="file" class="form-control" name="photo">
                </div>
                <div class="form-group row mb-0">
                        <button type="submit" class="btn btn-primary">
                              <i class="fas fa fa-plus"></i> Create
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
