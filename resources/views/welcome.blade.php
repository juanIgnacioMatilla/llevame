@extends('layout')

@section('content')
<div class="form-login">
    <i class="fa fa-times" aria-hidden="true"></i>
    <h1 class="h1-login">Iniciar sesión en Llevame</h1>
		<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="boton-ingresar">
                                    Login
                                </button>
                            </div>
                        </div>
            </form>
            <p class="link-crearcuenta" id="crear_cuenta">Crear cuenta</p>

    </div>
    <div class="form-registrarse">
      <i class="fa fa-times" aria-hidden="true" style="color:grey"></i>
    	<h1 class="h1-cuenta">Crear cuenta</h1>
     	<form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Nombre</label>

            <div class="col-md-6">
            <input id="name" type="text" placeholder="Nombre" class="input-cuenta" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="E-Mail" type="email" class="input-cuenta" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Contraseña" type="password" class="input-cuenta" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Cofirmar Contraseña" type="password" class="input-cuenta" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="boton-ingresar-cuenta">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

                    </div>
	<div id= "inicio" class="inicio">
		<div class="inicio1">
	      <img class="mobile1"src="imagenes/inicioimagen1.jpg" alt="">
	      <button class="boton-llevame" type="button" name="LLEVAME">LLEVAME</button>
	  </div>

		<div class="inicio2">
			<img class="mobile2" src="imagenes/inicioimagen2.jpg" alt="">
		  <button class="boton-llevar" type="button" name="LLEVAR">LLEVAR</button>
		</div>
	</div>
  <!--
	<div id= "quienes" class="contenedor-quienes">
    <section class="titulo-quienes">
      <article>
        <h2>¿TE LLEVO?</h2>
				<img src="imagenes/logotodoblanco.png">
      <article>
    </section>

    <div class="texto-quienes">
 		    <article>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.
         </p>
       </article>
    </div>
    <div class="imagen-quienes">
    <article>
     <img src="imagenes/quienessomos.jpg">
    <button type="button" name="INGRESAR">INGRESAR</button>
    </article>
  </div>
</div>-->


{{-- <section id= "quienes" class="contenedor-quienes">
  <article class="titulo-quienes">
    <h2>¿TE LLEVO?</h2>
    <img src="imagenes/logotodoblanco.png"> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.
     </p>
  </article>
  <article class="imagen-quienes">
     <img src="imagenes/quienessomos.jpg">
    <button type="button" name="INGRESAR">INGRESAR</button>
  </article>
</section>
 --}}

   <div class="container-quienes">

    <article class="quienes-texto">
        <div class="titulo">
          <h2>¿TE LLEVO?</h2>
          <img src="imagenes/logotodoblanco.png">
       </div>
     <div class="informacion">
       <p>LLevame es una empresa nacional que proporciona una red social de transporte compartida
       con todos los usuarios de ella. El vinculo entre usuarios se da por medio de pasajeros y
       conductores, pasajeros que buscan transporte para llegar a sus destinos y conductores que buscan
       compartir su viaje con otros e economizar gastos.
       Consiste en un buscador para los pasajeros y un sistema de posteo para que los conductores puedan
       especificar sus datos de origen, destino, horario, fecha, cantidad de pasajeros que pueden llevar y el precio
       por persona. </p>
     </div>
   </article>

   <article class="quienes-imagen">
      <img src="imagenes/quienessomos.jpg" alt="">
   </article>




  </div>



<div id= "faqs" class="preg-container">
    <h1 class="h1-faqs">FAQs</h1>

   <div class="preg1-2">
      <div class="preg-1">
      <h2 class="h2-preg">¿ES GRATIS? </h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. </p>
    </div>
    <div class="preg">
      <h2 class="h2-preg">¿ME BUSCAN?</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. </p>
    </div>
  </div>

  <div class="preg3-4">
    <div class="preg">
      <h2 class="h2-preg">¿Y SI NO LLEGO AL PUNTO DE ENCUENTRO?</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut

       </p>
    </div>
    <div class="preg">
      <h2 class="h2-preg">¿CON QUIENES VIAJO?</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua</p>
    </div>
  </div>

  <div class="preg5-img">
    <div class="preg">
      <h2 class="h2-preg">¿ES SEGURO? </h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. </p>
    </div>
    <img class="img-faqs"src="imagenes/faqs1.jpg" alt="">
  </div>
 </div>
  <div id= "ayuda" class="help-container">
     <div class="tit-ayuda">
       <h1 class="h1-ayuda">AYUDA</h1>
       <h2 class="h2-ayuda">¿COMO FUNCIONA?</h2>
     </div>
     <div class="grafico">
       <img class="grafico-img" src="imagenes/comofunciona.png" alt="">
       <img class="grafico-web"src="imagenes/comofuncionaweb.png" alt="">
     </div>
   </div>
@endsection