@extends('layout')
@section('content')
<div class="container-misViajes-Mobile">
<div class="form-misViajes">

   <div class="titulo-misViajes">
     <img src="imagenes/misviajesblne.png" alt="">
     <p>Mis Viajes</p>
   </div>

<article class="posteo-misViajes">
     <div class="flecha-verde-gris">
        <img src="imagenes/flecha_misviajes.png" alt="">
     </div>
     <div class="info-Feed-misViajes">
         <div class="usuario">
            <p>Juan Perez. 12m</p>
         </div>

         <div class="fecha-hora-misViajes">
             <p class="dia">JUEVES 29 SEPT.// 10:30</p>
             <div class="origen">
                <img src="imagenes/origen.png" alt="">
                <p>Villa Crespo, Malabia 2435</p>
            </div>
             <div class="destino">
                <img src="imagenes/destino.png" alt="">
                <p>Villa del Parque, Av. Triunbirato 6780</p>
            </div>
         </div>

       <div class="adicionales-misViajes">
           <img src="imagenes/pasajeros.png" alt="">
           <p class="espacio-disponible">1 asiento disponible</p>
           <p class="precio">120$ Por pasajero</p>
       </div>
     </div>

     <div class="opciones-Feed-misViajes">
        <img class="img1" src="imagenes/cancelarviaje.png" alt="">
        <img class="img2" src="imagenes/modeloauto.png" alt="">
        <img class="img3" src="imagenes/mensajes.png" alt="">
        <img class="img4" src="imagenes/basurablanca.png" alt="">
     </div>

 </article>
</div>
<div class="form-misViajes-Realizados">

 <article class="posteo-misViajes">
   <div class="flecha-verde-gris">
        <img src="imagenes/flecha_misviajesGris.png" alt="">
   </div>
   <div class="info-Feed-misViajes">
        <div class="usuario">
          <p>Carlos Gimenez. 18 sept.</p>
       </div>

       <div class="fecha-hora-misViajes">
        <p class="dia">MIERCOLES 19 SEPT.// 22:30</p>
          <div class="origen">
            <img src="imagenes/origen.png" alt="">
            <p>Devoto, Bulnes 435</p>
          </div>
          <div class="destino">
              <img src="imagenes/destino.png" alt="">
              <p>Lanus, Av Rivadavia 8094</p>
          </div>
       </div>

       <div class="adicionales-misViajes">
         <img src="imagenes/pasajeros.png" alt="">
         <p class="espacio-disponible">0 asiento disponible</p>
         <p id="adicional-status"class="precio">Viaje Realizado</p>
      </div>
   </div>

   <div class="opciones-Feed-misViajes">
          <img class="img1" src="imagenes/tickVerde.png" alt="">
          <img class="img2" src="imagenes/modeloauto.png" alt="">
          <img class="img3" src="imagenes/mensajes.png" alt="">
          <img class="img4" src="imagenes/basurablanca.png" alt="">
  </div>

</article>
</div>
<input id="user-id" style="visibility:hidden;" value="{{ Auth::user()->id }}"/>

 </div>
@endsection