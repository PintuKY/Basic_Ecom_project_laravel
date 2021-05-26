@extends('master')
@section('content')
<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
			<div class="col-md-12 offset-md-0">
				<div class="card">
					<div class="card-header" style="background-color: black; color: white; text-align:center;">
                    {{Session::get('user')['name']}} your Order List
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
                                    <th>Status</th>
                                    <th>Payment_method</th>
                                    <th>Payment_status</th>
                                    <th>Address</th>
								</tr>
							</thead>
							<tbody>
                           	@foreach($myorders as $item)
								<tr>
									<td>{{$item->id}}</td>
<td><img src="{{asset($item->gallery)}}" style="max-width: 100px; margin-top: 30px;">
									</td>
									<td>{{$item->name}}</td>
									<td>{{$item->price}}</td>
                                    <td>{{$item->category}}</td>
									<td>{{$item->description}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->payment_method}}</td>
                                    <td>{{$item->payment_status}}</td>
                                    <td>{{$item->address}}</td>

								</tr>
								@endforeach
								
							</tbody>
                            
						</table>
                        
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection