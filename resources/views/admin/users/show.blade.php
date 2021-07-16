@extends('admin.layout.main')
@section('title', 'Detail-User')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="card">

            <div class="card-header">
                <h3> {{ $user->name  }} </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <h4> Main Information</h4>
                        <h5> Adress :   {{ $user->profile->adress    }} </h5>
                        <h5> Phone :    {{ $user->profile->phone     }} </h5>
                        <h5> City :     {{ $user->profile->city      }} </h5>
                        <h5> Gender :   {{ $user->profile->gender    }} </h5>
                    </div>
                    <div class="col-lg-4">
                        <h4> Reviews </h4>
                        @if (isset($reviews) && $reviews->count() > 0)
                            @foreach ( $reviews as $review )
                                <div class="form-check" style="margin-bottom: 8px">
                                    <h5>  {{ $review->content }}  </h5>                                    
                                </div>
                            @endforeach
                        @else
                            <h4>  Not Have Reviews </h4>
                        @endif                        
                    </div>
                    <div class="col-lg-4">
                        <h4> Orders </h4>
                        @if (isset($orders) && $orders->count() > 0)
                            @foreach ( $orders as $order )
                                <div class="form-check" style="margin-bottom: 8px">
                                    <h5>  {{ $order->name }}  </h5>                                    
                                </div>
                            @endforeach
                        @else
                            <h4>  Not Have orders </h4>
                        @endif                        
                    </div>                    
                </div>
            </div>
        </div>
        <a href="{{ route('Users.index') }}" class="btn btn-primary"> Back </a>
    </div>
</div>    
@endsection