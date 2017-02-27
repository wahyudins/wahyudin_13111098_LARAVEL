@section('title','keluar')
@extends('templates.header')

@section('content')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<div class="container" style="background-color: #b9f6ca">
	<div class="row" style="height: 486px">
		<div class="col-md-2">
		</div>

		<div class="col-md-8">
			<br><br><br><br><br><br><br><br>
			<h1 style="text-align: center; color: #e65100" >Terimakasih telah berkunjung !!! <br>   <small style="color: #4a148c"> in web created by wahyudin</small></h1>
			<br><br><br>

			<center><a href="/"><button style="color: #000000" class="btn btn-info "> Masuk </button></a></center>
		</div>
		
		<div class="col-md-2">
		</div>
	</div>
</div>
@endsection
