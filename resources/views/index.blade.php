@extends('layout.main')
@section('title' , 'Home')
@section('content')

 <!-- Women Banner Section Begin -->
 <section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="uploads/women-large.jpg">
                    <h2> {{ $category->name }}  </h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active"> Popular-products </li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                        @foreach ( $prodcuts as $prodcut )
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{URL::asset($prodcut->photo)}}"
                                    alt="{{$prodcut->photo}}" class="card-img-top">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name"> {{ $prodcut->name }} </div>
                                <a href="#">
                                    <h5> Detail </h5>
                                </a>
                                <div class="product-price">
                                    {{ $prodcut->price }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->

 <!-- phones Banner Section Begin -->
 <section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active"> Popular-Phones  </li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                        @foreach ( $phones as $phone )
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{URL::asset($phone->photo)}}"
                                    alt="{{$phone->photo}}">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name"> {{ $phone->name }} </div>
                                <a href="#">
                                    <h5> Detail </h5>
                                </a>
                                <div class="product-price">
                                    {{ $phone->price }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="uploads/phones.jpg"
                    style="margin-left: 50px">
                    <h2> {{ $category_phone->name }}  </h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- phones Banner Section End -->
@endsection
