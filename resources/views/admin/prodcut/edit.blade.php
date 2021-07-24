@extends('admin.layout.main')
@section('title' , 'Edit-Prodcut' )
@section('content')

<div class="content-wrapper">

        <div class="card">
            <div class="card-header">
                <h4> Edit-Prodcut </h4>
            </div>
        <div class="card-body">
            <form action="{{route('Prodcut.update' , $prodcut->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleFormControlInput1"> Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $prodcut->name }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Write Description</label>
                    <textarea class="form-control"  rows="3" name="content">
                        {!! $prodcut->content  !!}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Price </label>
                    <input type="text" class="form-control" name="price" value="{{ $prodcut->price }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Photo </label>
                    <input type="file" class="form-control" name="photo">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"> Category </label>
                    <select class="form-control" name="category_id">
                        <option value="{{$prodcut->category->id }}"> {{ $prodcut->category->name  }} </option>
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
                                id="{{ $type->color }}" value="{{ $type->id }}"
                                @foreach ( $prodcut->types as $typechk )
                                    @if ( $type->id == $typechk->id  )
                                              checked
                                    @endif
                                @endforeach
                                >
                            <label class="form-check-label" for="{{ $type->color }}">
                                {{ $type->color }} + {{ $type->size }}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="form-group row mb-0" >
                        <button type="submit" class="btn btn-success">
                              <i class="fas fa fa-check"></i> Edit
                        </button>
                </div>
            </form>
        </div>
</div>
@endsection
