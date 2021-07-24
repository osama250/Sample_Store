@extends('admin.layout.main')
@section('title' , 'Edit-Category' )
@section('content')

<div class="content-wrapper">

    <div class="card">
            <div class="card-header">
                <h4> Edit-Category </h4>
            </div>
        <div class="card-body">
            <form action="{{ route('Category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleFormControlInput1"> Name</label>
                    <input type="name" name="name" class="form-control" value="{{ $category->name }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Write Description</label>
                    <textarea class="form-control" rows="3" name="description">
                        {!! $category->description  !!}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Photo </label>
                    <input type="file" class="form-control" name="photo">
                </div>
                <div class="form-group row mb-0">
                        <button type="submit" class="btn btn-success">
                          <i class="fas fa fa-check "></i> Edit
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
