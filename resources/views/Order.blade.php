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
							<tbody>
                                <tr>
                                	<td>Amount</td>
									<td>Rs: {{$total}}</td>
                                    
								</tr>
                                <tr>
                                	<td>Tax</td>
									<td>Rs: 0.0</td>
                                    
								</tr>
                                <tr>
                                	<td>Delivery</td>
									<td>Rs: 40</td>
                                   
								</tr>
                                <tr>
                                	<td>Total Amount</td>
									<td>RS: {{$total+40}}</td>
                                    
								</tr>
								
							</tbody>
                            
						</table>

					</div>

            <form action="{{route('orderplaced')}}" method="post">
            @csrf
                <div class="form-group">
                <label class="form" for="Addres">Delivery Addres</label>
                    <textarea class="form-control" placeholder="Enter Your Address" name="address"></textarea>
                 </div>


            <div class="order-form">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="cash" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Online Payment
                    </label>
                 </div>
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="cash">
                    <label class="form-check-label" for="exampleRadios2">
                        Pytam Payment
                    </label>
                 </div>
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="cash">
                    <label class="form-check-label" for="exampleRadios3">
                        Card Payment
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="cash">
                    <label class="form-check-label" for="exampleRadios3">
                         Payment On Delivery
                    </label>
                </div>
                <button type="submit" class="btn btn-success">Select Payment</button>
            </div>
            </form>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection