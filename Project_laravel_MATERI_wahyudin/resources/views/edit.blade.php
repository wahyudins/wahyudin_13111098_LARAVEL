@section('title','edit')
@extends('templates.header')
	
@section('content')
<div class="container " style="background-color: #000000">
	<div class="row" style="font-size: 20px">
		<div class="col-md-12">
				<ul class="nav navbar-nav" style="color: #1a237e">
					<li >
						<a href="#">&nbsp;Beranda&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="">
						<a href="#">&nbsp;menu 1&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="">
						<a href="#">&nbsp;menu 2&nbsp;</a>
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

		<div class="col-md-4">
			<h4 style="color: #1a237e"><i>Edit data Siswa</i></h4><br>

			<form action="{{ route('tambah') }}" method="post">
				<div class="form-group form-group-default">
					<div class="form-group">
						<label>ID</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control"  name="id" value="">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control" name="nama" value="">
					</div>
					<div class="form-group">
						<label>NIM</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control" name="nim"  value="">
					</div>
					<div class="form-group">
						<label>Alamat</label>            
			    		<textarea class="form-control" style=" width: 200px; "  name="alamat" ></textarea>
		    		</div>
						<button type="submit" style="color: #000000" class="btn btn-info ">Update</button>
					</div>
			</form>
			
		</div>
		<div class="col-md-4">
		
		</div>
	</div>
</div>
@endsection