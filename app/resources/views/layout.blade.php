<!DOCTYPE html>
<html>
<head>
	<style>
		.active{
			text-decoration: :none;
			color:green; 
		}

	</style>
	<title>Mi sitio</title>
</head>
<body>
	<header>

		<?php function activeMenu($url){
			return request()->is($url)? 'active':'';
		} ?>

		<h1> {{ request()->is('/')? 'estas en el home': 'no estas en el home'}}</h1>
		<nav>
			<a class="{{ activeMenu('/')}}"
				href=" {{ route('home') }}">INICIO</a>
			<a class="{{ activeMenu('perfil/*')}}"
				href=" {{route('perfil','karla')}} ">PERFIL</a>
		</nav>
	</header>
	@yield('contenido')
 	<footer>copyright Nogales {{ date('Y')}}</footer>

</body>
</html>