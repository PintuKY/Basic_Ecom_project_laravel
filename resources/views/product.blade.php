@extends('master')
@section('content')
<div class=custom-product>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
   @foreach($products as $item)
   <div class="carousel-item {{$item['id']==1?'active':''}}">
   <a href="detail/{{$item['id']}}">
      <img class="d-block w-100 slider-img" src="{{$item['gallery']}}" alt="First slide">
      <div class="carousel-caption d-none d-md-block slider-text">
            <h5>{{$item['name']}}</h5>
            <p>{{$item['description']}}</p>
         </div>
    </a>
    </div>
   @endforeach
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <div class="tranding-wrapper">
        <h3>Tranding</h3>
     @foreach($products as $item)
        <div class="tranding-item">
        <a href="detail/{{$item['id']}}">
            <img class="tranding-img" src="{{$item['gallery']}}" alt="First slide">
            <div class="">
                    <h5>{{$item['name']}}</h5>
            </div>
        </a>
        </div>
     @endforeach
    </div>
</div>
@endsection
