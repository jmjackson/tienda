<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rainbow Moda</title>
	{!!Html::style('css/bootstrap-theme.css')!!}
	{!!Html::style('css/bootstrap.css')!!}
	{!!Html::style('css/style.css')!!}

</head>
<body>
	<div class="container">
		<header id="header" class="col-md-12">
			<div class="logo col-md-4"><h1>Rainbows Moda</h1></div>
			<div class="menus col-md-5 col-md-offset-3"> 
				<a href="#">Inicio</a>|
				<a href="#">Contacto</a>|
				<a href="#">Acerca</a>
				<a href="#">Inicio de Sesion</a>
				<a href="#"><img src="#" alt=""></a>
				<a href="#"><img src="#" alt=""></a>
			</div>
				</header>	
			<div class="content">
			@yield('contenido')
			</div>

	</div>
</body>
</html>