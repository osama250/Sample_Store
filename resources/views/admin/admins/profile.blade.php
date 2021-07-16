@extends('admin.layout.main')
@section('title' , 'My-Profile')
@section('content')

        @if (count($errors)>0)
            @foreach ($errors->all() as $item)
                <div class="alert alert-danger" role="alert">
                    {{$item}}
                </div>
            @endforeach
        @endif

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Profile {{ $user->name }} </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('profile.update') }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> Name </label>
                                  <input type="text" name="name" class="form-control"  value="{{ $user->name }}">
                                </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1"> Email </label>
                                    <input type="email" name="email" class="form-control"  value="{{$user->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"> Adress </label>
                                      <input type="text" name="adress" class="form-control"  value="{{$user->profile->adress }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"> Phone </label>
                                      <input type="text" name="phone" class="form-control"  value="{{$user->profile->phone }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"> Gender </label>
                                      <input type="text" name="gender" class="form-control"  value="{{$user->profile->gender }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"> City </label>
                                      <input type="text" name="city" class="form-control"  value="{{$user->profile->city }}">
                                    </div>
                                    <div class="form-group">
                                       <button class="btn btn-success" type="submit"> update</button>
                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
