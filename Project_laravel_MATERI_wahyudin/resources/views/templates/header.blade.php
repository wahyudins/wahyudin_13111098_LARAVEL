<!DOCTYPE html>
<html>
<head>
	<title> @yield ('title') | by wahyudin</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
			<br><br>
				<h1>
					<b>Web</b><small style="font-size:25px"> - membuat aplikasi crud</small>  
				</h1>
			</div>
			<br>
		</div>
	</div>
</div>

@yield('content')

</body>
	<link rel="javascript" src="js/jquery.js">
	<link rel="javascript" src="js/jquery.min.js">
</html>
