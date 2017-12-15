@extends('layout')
@section('content')
 <div class="container-mensajes">
      <div class="mensajes">

        <div class="titulo-mensajes">
          <img src="imagenes/mensaje-notificacion.png" alt="">
          <p>Mensajes</p>
        </div>

        <div class="mensaje-info">

          <div class="mensaje-foto">
           <img src="imagenes/foto-perfil.jpg" alt="">
          </div>
          <div class="mensaje-texto">
              <p class="usuario">Juan Perez:</p>
              <p>"Hola Pedro, si te puedo esperar 20 minutos mas a que llegues
                no hay problema, nos vemos hoy"</p>
          </div>
          <div class="mensaje-opciones">
            <img src="imagenes/basurablanca.png" alt="">
            <br>
            <br>
            <img src="imagenes/basurablanca.png" alt="">
          </div>
        </div>

      </div>



    </div>
@endsection