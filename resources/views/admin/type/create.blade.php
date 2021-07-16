@extends('admin.layout.main')
@section('title' , 'Add-Type')
@section('content')

    <div class="content-wrapper">
        <div class="container">
            <div class="card-header">
                <h4> New-Type </h4>
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
                <form action="{{route('Types.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">  Size </label>
                        <input type="text" class="form-control" name="size"  placeholder="Write Size..">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"> Color </label>
                        <input type="text" class="form-control" name="color"  placeholder="Write Color..">
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
