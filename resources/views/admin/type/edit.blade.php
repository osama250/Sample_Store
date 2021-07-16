@extends('admin.layout.main')
@section('title' , 'Edit-Type')
@section('content')

    <div class="content-wrapper">
        <div class="container">
            <div class="card-header">
                <h4> Edit-Type </h4>
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
                <form action="{{route('Types.update' , $type->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">  Size </label>
                        <input type="text" class="form-control" name="size"  value="{{ $type->size}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"> Color </label>
                        <input type="text" class="form-control" name="color" value="{{ $type->color}}">
                    </div>
                    <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-success">
                                  <i class="fas fa fa-check"></i> Edit
                            </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
