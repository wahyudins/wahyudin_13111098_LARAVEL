@section('title')
	home
@endsection
@extends('templates.header')
@section('content')
<div class="container " style="background-color: #000000">
	<div class="row" style="font-size: 20px">
		<div class="col-md-12">
				<ul class="nav navbar-nav" style="color: #1a237e">
					<li >
						<a class="active" style="background-color: #b9f6ca" href="{{ route('awal') }}">&nbsp;Beranda&nbsp;</a>
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
	<div class="row" style="height: 486px">
		<div class="col-md-12">
			<br><br>
			  <h2>Data siswa</h2>        
			  <table class="table table-bordered" >
			    <thead>
			      <tr>
			        <th><center>No.</center></th>
			        <th><center>Nama</center></th>
			        <th><center>NIM</center></th>
			        <th><center>Alamat</center></th>
			        <th colspan="2"><center>Aksi</center></th>
			      </tr>
			    </thead>
			    <tbody>
			    <tr>
			    	<td></td>
			    	<td></td>
			    	<td></td>
			    	<td></td>
			    	
			    	<td><center><a href="">edit</a></td></center>
			    	<td><center><a href="">delete</a></td></center>
			    </tr>
			    </tbody>
			  </table>
			  <a href="{{ route('tambah') }}"><button type="button" class="btn btn-info">
				Tambah Data
			</button></a>
			</div>
	</div>
</div>
@endsection