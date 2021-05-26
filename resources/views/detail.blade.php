@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img  class="detail-img" src="{{asset($data['gallery'])}}" alt="lg">
            </div>
            <div class="col-sm-6">
                <a href="{{route('products')}}#Home_Page"><-Go Back</a>
                <div class="detail-product">
                    <div class="product-info">
                        <h2>{{$data['name']}}</h2>
                    </div>
                    <div class="product-info">
                        <h3>Price: {{$data['price']}}</h3>
                    </div>
                    <div class="product-info">
                        <h4>Details: {{$data['description']}}</h4>
                    </div>
                    <div class="product-info">
                        <h4>Category: {{$data['category']}}</h4>
                    </div>
                        <form action="{{route('AddtpCart')}}" method="post">
                        @csrf
                            <div class="product-buy-now-link">
                                <input type="hidden" name="product_id" value="{{$data['id']}}">
                                <button class="btn btn-success">Buy Now</button>
                                <button  class="btn btn-primary">Add to Cart</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection