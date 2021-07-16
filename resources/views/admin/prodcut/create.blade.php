@extends('admin.layout.main')
@section('title' , 'Add-Prodcut' )
@section('content')

<div class="content-wrapper">

        <div class="card">
            <div class="card-header">
                <h4> Add-Prodcut </h4>
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
            <form action="{{route('Prodcuts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1"> Name</label>
                    <input type="text" class="form-control" name="name"  placeholder="Write name..">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Write Description</label>
                    <textarea class="form-control"  rows="3" name="content"> </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Price </label>
                    <input type="text" class="form-control" name="price"  placeholder="Write price..">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Photo </label>
                    <input type="file" class="form-control" name="photo"  placeholder="Choose photo..">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"> Category </label>
                    <select class="form-control" name="category_id">
                        <option value=""> Chosse Category </option>
                        @foreach ($categories as $category )
                           <option value="{{$category->id}}">  {{  $category->name  }}  </option>
                        @endforeach
                    </select>
                  </div>
                <label for="exampleFormControlTextarea1"> Color: </label>
                <div class="row">
                    @foreach ( $types as $type )
                    <div class="col">
                        <div class="form-check" style="margin-bottom: 8px">
                            <input class="form-check-input" type="checkbox" name="colors[]"
                                id="{{ $type->color }}" value="{{ $type->id }}">
                            <label class="form-check-label" for="{{ $type->color }}">
                                {{ $type->color }} + {{ $type->size }}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="form-group row mb-0" >
                        <button type="submit" class="btn btn-primary">
                              <i class="fas fa fa-plus"></i> Create
                        </button>
                </div>
            </form>
        </div>
</div>
@endsection
