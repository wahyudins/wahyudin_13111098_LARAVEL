@section('title')
	login
@endsection
@extends('templates.header')

@section('content')
<div class="container" style="background-color: #b9f6ca">
	<div class="row" style="height: 486px">
		<div class="col-md-4">
		<br><br><br><br>
		</div>

		<div class="col-md-4">
			<br><br><br><br>
			  <h2>Login</h2>    
			  <br>
			  <br>    
			<form method="post">
				<div class="form-group form-group-default">
					<div class="form-group">
						<label>username</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control" name="username" >
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" style="height: 30px; width: 200px;" class="form-control" name="password">
						<br>
					</div>
					<div class="form-group">
						<a href="{{ route('awal') }}" style="color: #000000" class="btn btn-info "> Login </a>
						<a href="{{ route('exit') }}" style="color: #000000" class="btn btn-info "> Keluar </a>
					</div>
				</div>
			</form>
		</div>

		<div class="col-md-4">
		</div>
	</div>
</div>
@endsection