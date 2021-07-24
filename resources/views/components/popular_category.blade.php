 <!-- Banner Section Begin -->
 <div class="banner-section spad">
    <div class="container-fluid">
        <h3 class="text-center" style="margin-bottom: 10px" >Popular Category </h3>
        <div class="row">
            @foreach ( get_categories() as $category )
                <div class="col-lg-4">
                    <div class="single-banner" style="margin-bottom: 15px">
                        <a href="">
                            @if ($category->photo == Null )
                                {{'No Hvae Image'}}
                            @else
                                <img src="/uploads/categories/{{$category->photo}}"
                                    alt="{{$category->photo}}">
                            @endif
                            <div class="inner-text">
                                <h4> {{ $category->name }} </h4>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
  </div>
<!-- Banner Section End -->
