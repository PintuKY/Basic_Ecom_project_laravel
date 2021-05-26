@extends('master')
@section('content')
<form action="{{route('registar')}}" method="post">
        @csrf
    <div class="container" style="margin-top:60px;">
        <div class="card">
            <div class="card-header" style="text-align:center;">
                <h4>Register Form</h4>
            </div>
            <div class="card body">
             <div class="row">
                <div class="col-md-3 offset-md-4">
                <div class="form-group">
                    <label for="Email">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                 <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="Enter email">
                </div>
            <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" name="pass" id="Password" placeholder="Password">
            </div>
            <input type="submit" class="btn btn-primary"/>
        </div>
        </div>
    </div>
        </div>
    </div>
</form>
@endsection
