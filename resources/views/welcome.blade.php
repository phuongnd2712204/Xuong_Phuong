@extends('layouts.master')
@section('content')
<section class="py-5">
  <div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
      @foreach($products as $item)
      <div class="col mb-5">
        <div class="card h-100 shadow-sm">
          <!-- Product image-->
          <img class="card-img-top" src="{{$item->img_thumbnail}}" alt="..." />
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">{{$item->name}}</h5>
              <!-- Product price-->
              <span class="text-muted text-decoration-line-through">$80.00</span>
              <span>${{$item->price}}</span>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('product.detail',$item->slug)}}">Chi tiết</a></div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
