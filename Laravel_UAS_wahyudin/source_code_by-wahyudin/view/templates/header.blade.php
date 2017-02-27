<!DOCTYPE html>
<html>
<head>
	<title> @yield ('title') | by wahyudin</title>
	<meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
	<script type="text/javascript"></script>
</head>

<body style="background-color: #eeeeee">

<!--  bagian header  spasi -->
<div class="container">
	<div class="col-md-12"><br>
	</div>
</div>
<div class="container" style="background-color: #69f0ae">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					<b>Web</b><small style="font-size:25px"> - membuat aplikasi crud</small>  
				</h1>
			</div>
		</div>
	</div>
</div>
@yield('content')
</body>
	<link rel="javascript" src="js/jquery.js">
	<link rel="javascript" src="js/jquery.min.js">
</html>
