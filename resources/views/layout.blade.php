<!DOCTYPE html>
<html>
<head>
	<title>LLevame</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <meta name='csrf-token' content='{{ csrf_token() }}'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
	<header>
		<div class="headercontainer">
			<div class="header_main">
				<img class="logo" src="imagenes/logoblanco.png" >
				@if(!Auth::check())
				<img class="iconomenumobile" src="imagenes/iconomenumobile.png" onclick="openNav(this)">
	 			@endif
				<div class="topnav" id="myTopnav">
				@if(!Auth::check())
	  			<a href="#inicio">INICIO</a>
	  			<a href="#quienes">QUIENES SOMOS</a>
	 			<a href="#faqs">FAQs</a>
	 			<a href="#ayuda">AYUDA</a>
	 			<a id="botonIngresar" type="button">INGRESAR</a>
	 			@else
	 			<a href="#inicio">Inicio</a>
	 			<a href="{{ url('/') }}">Cerrar Sesion</a>
	 			<a href="" style="color: #00f07f"><i class="fa fa-user-o"></i> {{ Auth::user()->name }}  </a>
	 			@endif
			</div>
			</div>
			@if(!Auth::check())
				<nav class="panel">
					<div id="mySidenav" class="sidenav">
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  			<a href="#inicio">INICIO</a>
			  			<a href="#quienes">QUIENES SOMOS</a>
			 			<a href="#faqs">FAQs</a>
			 			<a href="#ayuda">AYUDA</a>
			 			<a id="botonIngresarMobile" type="button">INGRESAR</a>
		 			</div>
				</nav>
	 		@endif
		</div>
		<script>
			var hamburgerView;
			function openNav(x) {
				hamburgerView = x;
			    x.classList.toggle("change");
			    document.getElementById("mySidenav").style.width = "250px";
	    		document.getElementById("main").style.marginLeft = "250px";
	    		document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

			}
			function closeNav() {
				hamburgerView.classList.toggle("change");
	    		document.getElementById("mySidenav").style.width = "0";
	   		 	document.getElementById("main").style.marginLeft = "0";
	   		 	document.body.style.backgroundColor = "white";
			}
		</script>
	</header>
@yield("content")

	@if(!Auth::check())
	<footer>
			<div class="contenedor-footer">

			<div class="footer-contacto">
					<p id="titulo-contacto">Contacto</p>
					<p>Buenos Aires, Argentina</p>
					<p>contacto@llevame.com.ar</p>
					<p>Tel +549 11346748</p>
			</div>
			<div class="footer-iconos">
					<img src="imagenes/iconofooterinsta.png">
					<img src="imagenes/iconofooterface.png">
			</div>
			<div class="footer-menu">
				<ul >
					<li><a href="#inicio"><p>Home</p></a></li>
					<li><a href="#quienes"><p>Quienes Somos</p></a></li>
					<li><a href="#faqs"><p>FAQs</p></a></li>
					<li><a href="#ayuda"><p>Ayuda</p></a></li>
				</ul>
			</div>
			<div class="footer-logo">
				<img src="imagenes/logoblanco.png">
			</div>
			</div>
		</footer>
	@else
		 <div id= "menu-footer-mobile-id" class="contenedor-menu-footer-mobile">
	    <div class="menu-footer-mobile">
	          <li><a href="{{ url('/home') }}"><img id="notificaciones-menu-footer" class="img-menu-footer" src="imagenes/notificaciones.png" alt=""></a></li>
	          <li><a href="{{ url('/mensajes') }}"><img id="mensajes-menu-footer"class="img-menu-footer" src="imagenes/mensajes.png" alt=""></a></li>
	          <li><a href="{{ url('/misviajes') }}"><img id="viajes-menu-footer" class="img-menu-footer" src="imagenes/misviajes.png" alt=""></a></li>
	          <li><a href="{{ url('/buscar') }}"><img id="buscarViaje-menu-footer" class="img-menu-footer" src="imagenes/buscarviaje.png" alt=""></a></li>
	          <li><a href="{{ url('/perfil') }}"><img id="perfil-menu-footer" class="img-menu-footer" src="imagenes/perfil.png" alt=""></a></li>
	   </div>
   </div>
   @endif
   <script type="text/javascript" src='{{ asset('js/scripts.js') }}'></script>
</body>
</html>