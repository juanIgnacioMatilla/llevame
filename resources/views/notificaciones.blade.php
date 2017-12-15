@extends('layout')
@section('content')
 <div id= "menu-footer-mobile-id" class="contenedor-menu-footer-mobile">
	    <div class="menu-footer-mobile">
	          <li><a href="{{ url('/notificaciones') }}"><img id="notificaciones-menu-footer" class="img-menu-footer" src="imagenes/notificaciones.png" alt=""></a></li>
	          <li><a href="{{ url('/mensajes') }}"><img id="mensajes-menu-footer" class="img-menu-footer" src="imagenes/mensajes.png" alt=""></a></li>
	          <li><a href="{{ url('/misviajes') }}"><img id="viajes-menu-footer" class="img-menu-footer" src="imagenes/misviajes.png" alt=""></a></li>
	          <li><a href="{{ url('/buscar') }}"><img id="buscarViaje-menu-footer" class="img-menu-footer" src="imagenes/buscarviaje.png" alt=""></a></li>
	          <li><a href="{{ url('/perfil') }}"><img id="perfil-menu-footer" class="img-menu-footer" src="imagenes/perfil.png" alt=""></a></li>
	   </div>
@endsection