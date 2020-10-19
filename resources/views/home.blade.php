@extends('master')
@section('content')
<div class="row">
  @foreach (App\Models\Product::has("images")->get() as $product)

  <div class="col-md-4">
    <div id="carouselExampleControls{{$product->id}}" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @foreach ($product->images as $image)
        <div class="carousel-item  
        @if ($loop->first)
          active
        @endif ">
          <img src="{{asset('storage/'.$image->img)}}" class="d-block w-100" alt="{{$product->name}}">
        </div>
        {{-- <div class="carousel-caption d-none d-md-block">
          <h5>{{$product->name}}</h5>
          <h6>{{$product->price}}</h6>
          <p>{{$image->comments}}</p>
        </div> --}}
        @endforeach


      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls{{$product->id}}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls{{$product->id}}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>

  @endforeach
</div>


{{-- 
  @foreach (App\Models\Product::all() as $product)
  <div class="row">
    @foreach ($product->images as $image)
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('storage/'.$image->img)}}" class="card-img-top" alt="{{$product->name}}">
<div class="card-body">
  <h5 class="card-title">{{$product->name}}</h5>
  <p class="card-text">{{$image->comments}}</p>
  <a href="#" class="btn btn-danger btn-block">Order Now</a>
</div>
</div>
</div>
@endforeach
</div>
@endforeach

<div class="row">
  @foreach (App\Models\Product::all() as $product)
  @php
  $image =$product->images->first();
  @endphp
  @if ($image)
  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="{{asset('storage/'.$image->img)}}" class="card-img-top" alt="{{$product->name}}">
      <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$image->comments}}</p>
        <a href="#" class="btn btn-danger btn-block">Order Now</a>
      </div>
    </div>
  </div>
  @endif

  @endforeach

</div> --}}
@endsection