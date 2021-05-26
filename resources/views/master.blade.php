@extends('Lib')
<!DOCTYPE html>
<html>
<head>
	<title>Ecom_Proj_Master_Page</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>
	{{View::make('header')}}
		@yield('content')
	{{View::make('footer')}}


</body>
<style>
	.navbar_right{
		float: left;
	}
	img.slider-img{
		height: 400px !important;
	}
	.custom-product{
		height: 600px;
	}
	.slider-text{
		background-color: #35443585 !important;
	}
	.tranding-img{
		height: 100px;
	}
	.tranding-item{
		float: left;
		width: 16%;
	}
	.tranding-wrapper{
		margin:30px;
	}
	.detail-img{
		height: 100%;
		width: 35%;
	}
	.product-info{
		padding: 10px;
	}
	.order-form{
		margin-left:20px;
		padding:10px;
	}
</style>
</html>

