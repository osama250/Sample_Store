@extends('admin.layout.main')
@section('title', 'Deatial-Prodcut')
@section('content')


<div class="content-wrapper">
    <div class="container">
        <div class="card-header">
            <h2> {{ $prodcut->name  }} </h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                @if ($prodcut->photo == Null )
                     {{'No Hvae Image'}}
                @else
                     <img src="/uploads/prodcuts/{{$prodcut->photo }}" alt="{{$prodcut->photo}}"
                        alt="Erorr" class="img-responsiv" width="100%">
                @endif
            </div>
            <div class="col-lg-8">
                <div class="card-body">
                    <h5 class="card-title"> Category: {{ $prodcut->category->name }} </h5>
                    <p class="card-text"> Description: {{ $prodcut->content }}   </p>
                    <p class="card-text"> Price: {{ $prodcut->price }}     </p>
                    <h4> Attributes:  </h4>
                      <div class="row">
                          @if (isset($types) && $types->count() > 0)
                            @foreach ( $types as $type )
                            <div class="col">
                                <div class="form-check" style="margin-bottom: 8px">
                                    <label class="form-check-label" >
                                        <h5>   {{ $type->color }} + {{ $type->size }}  </h5>
                                    </label>
                                </div>
                            </div>
                            @endforeach
                           @else
                                <h5>  Not Have Types </h5>
                          @endif
                      </div>
                         <h4> Reviews:  </h4>
                        @if (isset($reviews) && $reviews->count() > 0)
                            @foreach ( $reviews as $review )
                                <div class="form-check" style="margin-bottom: 8px">
                                    <h5>  {{ $review->content }}  </h5>
                                </div>
                            @endforeach
                        @else
                                <h4>  Not Have Reviews </h4>
                        @endif
                    <a href="{{ route('Prodcuts.index') }}" class="btn btn-primary"> Back </a>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection()
