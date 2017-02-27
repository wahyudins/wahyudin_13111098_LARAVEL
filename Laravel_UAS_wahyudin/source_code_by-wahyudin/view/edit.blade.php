@section('title','edit')
@extends('templates.header')
	
@section('content')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<div class="container " style="background-color: #000000">
	<div class="row" style="font-size: 20px">
		<div class="col-md-12">
				<ul class="nav navbar-nav" style="color: #1a237e">
					<li >
						<a href="/home">&nbsp;Beranda&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="">
						<a href="#">&nbsp;menu 1&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="">
						<a href="#" class="active" style="background-color: #b9f6ca">&nbsp;menu 2&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="">
						<a href="#">&nbsp;menu 3&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</ul>
		</div>
	</div>
</div>

<div class="container" style="background-color: #b9f6ca">
<br><br><br>
</div>

<!--  bagian form input pendataan    -->
<div class="container" style="background-color: #b9f6ca">
	<div class="row" style="height: 486px">
		<div class="col-md-4">
		</div>
		@foreach ($siswa as $mahasiswa)
		<div class="col-md-4">
			<h4 style="color: #1a237e"><i><b>Edit data Siswa</i></b></h4><br>

			<form method="post" action="update/{{$mahasiswa->id}}">
				<div class="form-group">
				<label>Nama</label>
					<input  type="text" style="height: 30px; width: 200px;" class="form-control" name="nama" value="{{ $mahasiswa->nama }}"> 
				</div>
				<div class="form-group">
				<label>NIM</label>
					<input  type="text" style="height: 30px; width: 200px;" class="form-control" name="nim" value="{{ $mahasiswa->nim }}">
				</div>
				<div class="form-group">
					<label>Alamat</label>  
					<textarea class="form-control" style=" width: 200px; " name="alamat" >{{ $mahasiswa->alamat}} </textarea>
				</div>
					<input type="submit" name="submit" value="update" class="btn btn-info">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PUT">
			</form>
			@endforeach
		</div>
		<div class="col-md-4">
		
		</div>
	</div>
</div>
@endsection