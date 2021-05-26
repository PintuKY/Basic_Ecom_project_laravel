@extends('master')
@section('content')
<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
			<div class="col-md-12 offset-md-0">
				<div class="card">
					<div class="card-header" style="background-color: black; color: white; text-align:center;">
                    {{Session::get('user')['name']}} your Cart List
					</div>
					<div class="card-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Product_ID</th>
                                    <th>gallery</th>
									<th>Name</th>
									<th>Price</th>
									<th>Category</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
                            <a href="{{route('orderNow')}}" class="btn btn-success"  style="margin-top:20px;">Order Now</a>
								@foreach($products as $item)
								<tr>
									<td>{{$item->id}}</td>
<td><img src="{{asset($item->gallery)}}" style="max-width: 100px; margin-top: 30px;">
									</td>
									<td>{{$item->name}}</td>
									<td>{{$item->price}}</td>
                                    <td>{{$item->category}}</td>
									<td>{{$item->description}}</td>
									<td><a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove</a>
									<a href="{{route('orderNow')}}/{{$item->id}}" class="btn btn-success"  style="margin-top:20px;">Buy Now</a>
									</td>
								</tr>
								@endforeach
								
							</tbody>
                            
						</table>
                        
					</div>
                    <a href="{{route('orderNow')}}" class="btn btn-success"  style="margin-top:20px;">Order Now</a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection