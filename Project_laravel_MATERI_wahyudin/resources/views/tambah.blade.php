@section('title','tambah')
@extends('templates.header')
@section('content')
<div class="container " style="background-color: #000000">
	<div class="row" style="font-size: 20px">
		<div class="col-md-12">
				<ul class="nav navbar-nav" style="color: #1a237e">
					<li class="">
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
			<h4 style="color: #1a237e"><i>Tambah data Siswa</i></h4><br>
			<form action="/tambah_proses" method="post">
					<div class="form-group">
						<label>Nama</label>
						<input maxlength="10" type="text" style="height: 30px; width: 200px;" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label>NIM</label>
						<input maxlength="10" type="text" style="height: 30px; width: 200px;" class="form-control" name="nim">
					</div>
					<div class="form-group">
					<label>Alamat</label>            
	    			<textarea class="form-control" style=" width: 200px;" id="alamat" name="alamat"></textarea>
	    			</div>
					<button type="submit" style="color: #000000" class="btn btn-info ">Simpan</button>
			</form>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
@endsection