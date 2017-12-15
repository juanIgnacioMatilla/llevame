@extends('layout')
@section('content')
  <div class="container-feed">

         <div class="PRUEBA">
            <h1>Mi Perfil</h1>
          </div>

      <div class="llevame-blanco">

        <div class="llevame-botones">
           <a href="timeline.php" type="button" class="b1">LLÉVAME</a>
           <a href="{{ url('/llevar') }}" type="button" class="b2">LLEVAR</a>
       </div>

       <form class="buscar-web" action="buscar-mobile.php" method="get">

          <div class="formulario-buscar-web">
           <div class="origen-buscar">
           <div class="origen-cuadrado-buscar">
           <img src="imagenes/origen.png">
           <input type="text" class="form-buscar" id="origen" name="origen" value="" placeholder="Origen">
           </div>
           </div>

           <div class="destino-buscar">
           <div class="destino-cuadrado-buscar">
           <img src="imagenes/destino.png">
           <input type="text" class="form-buscar" id="destino" name="destino" value="" placeholder="Destino">
           </div>
           </div>



           <div class="horario-buscar">
           <div class="horario-cuadrado-buscar">
               <img src="imagenes/horario.png">
               <input type="text" class="form-buscar" id="horario" name="horario" value=""
               placeholder="Horario" onfocus="(this.type='time')" onblur="if(!this.value)this.type='text">
            </div>
            </div>


          <div class="fecha-buscar">
          <div class="fecha-cuadrado-buscar">
            <img src="imagenes/fecha.png">
            <input type="text" placeholder="Fecha" class="form-buscar" id="fecha" name="fecha" value=""
            onfocus="(this.type='date')" onblur="if(!this.value)this.type='text">
          </div>
          </div>

         <button type="submit" name="buscar-mobile"><i class="fa fa-search"></i></button>
        </div>
      </form>


      <article class="posteo">
        <div class="fotoperfil">
          <img class="foto1"src="imagenes/foto-perfil.jpg" alt="">
          <img class="foto2"src="imagenes/animalprohibido.png" alt="">
          <img class="foto3"src="imagenes/fumar.png" alt="">
        </div>

      <div class="info-Feed-misViajes">
          <div class="usuario">
            <p>Francisco Pascal. 12m</p>
          </div>
        <div class="fecha-hora">
            <p class="dia">MARTES 30 SEPT.// 22:40</p>
              <div class="origen">
                <img src="imagenes/origen.png" alt="">
                <p>Centro Av. 9 De Julio 534</p>
              </div>
              <div class="destino">
                <img src="imagenes/destino.png" alt="">
                <p>DOT Shopping</p>
              </div>
        </div>
        <div class="adicionales">
            <img src="imagenes/pasajeros.png" alt="">
            <p class="espacio-disponible">2 pasajeros disponibles</p>
            <p class="precio">80$ Por pasajero</p>
        </div>
      </div>

        <div class="opciones-Feed-misViajes">
          <img class="img1" src="imagenes/llevameposteoblanco.png" alt="">
          <img class="img2" src="imagenes/modeloauto.png" alt="">
          <img class="img3" src="imagenes/mensajes.png" alt="">
        </div>
      </article>
    </div>
       </div>
@endsection