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
						<a class="active" style="background-color: #424242" href="/home">&nbsp;Beranda&nbsp;</a>
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
	<div class="row" style="height: 500px">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<br>
			  <center><h2>Data siswa</h2></center><br>
			  <!--style="margin-left: 625px"-->
			  <a href="home/tambah" type="button" class="btn btn-primary">Tambah Data</a>
			  <br>
			  <a href="/" style="color: #000000" class="btn btn-info " style="margin-left: 500px"> Keluar </a>
			  <br>        
			  <table class="table table-bordered" style="border: 6px; background-color: #00e676;">
			    <thead>
			      <tr style="height: 60px; font-style: #ffffff; border-color: #000000">
			        <th width="50" style="text-align: center; vertical-align: middle;">No.</th>
			        <th width="190" style="text-align: center; vertical-align: middle;">Nama</th>
			        <th width="110" style="text-align: center; vertical-align: middle;">NIM</th>
			        <th width="500" style="text-align: center; vertical-align: middle;">Alamat</th>
			        <th colspan="2" style="text-align: center; vertical-align: middle;">Aksi</th>
			      </tr>
			    </thead>
			    <tbody class="table table-striped table-hover" >
			    @foreach ($mahasiswa as $mhs) 
			    <tr style="height: 20px">
			    	<td style="text-align: center;" height="20"> {{ $no++ }}</a></td>
			    	<td>&nbsp {{ $mhs->nama }}</td>
			    	<td style="text-align: center;">{{ $mhs->nim}}</td>
			    	<td>&nbsp {{ $mhs->alamat}}</td>
			    	<td><center><a href="home/edit/{{$mhs->id}}" style="color: #ffffff" class="btn btn-primary btn-sm">edit</a></td></center>
			    	<td><center><a href="home/delete/{{$mhs->id}}" style="color: #ffffff" class="btn btn-danger btn-sm">delete</a></td></center>
			    </tr>
			    @endforeach
			    </tbody>
			  </table>
			  <br>
			  <br>

			</div>
		<div class="col-md-2">
		</div>
	</div>
</div>
@endsection