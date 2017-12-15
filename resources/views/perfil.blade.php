@extends('layout')
@section('content')
<div id= "perfil-id" class="contenedor-perfil">

         <form class="completar-perfil" action="{{ url('/perfil') }}" method="post">
         {{ csrf_field() }}

         <div class="formulario-perfil">
         <h1 class="h2-perfil">MI PERFIL</h1>

         <div class="completar-nombre">
         <input style="color: #00f07f" type="text" class="form-completar-perfil" id="nombre-completado" name="name" value="{{ Auth::user()->name }}" placeholder="Nombre">
         </div>

         <div class="completar-apellido">
         <input style="color: #00f07f; font-weight:bold" type="text" class="form-completar-perfil" id="apellido-completado" name="last_name" value="{{ Auth::user()->last_name }}" placeholder="Apellido">
         </div>


         <div class="subir-foto-usuario">
         <div id="circulo-perfil-foto"><input style="color: grey" type="text" name="profile_pic" id="subir-foto-usuario" accept="image/png, image/jpeg" onfocus="(this.type='file')" onblur="if(!this.value)this.type='text" placeholder="Subir foto"></div>
         </div>


         <h1 class="h1-perfil" id="informacion-personal">Información personal</h1>

         <div class="completar-trabajo">
         <img class="iconos-perfil" src="imagenes/icono-trabajo.png">
         <input style="color: grey" type="text" class="form-completar-datos" id="lugar-trabajo" name="work" value="{{ Auth::user()->work }}" placeholder="Trabajo en ...">
         </div>

         <div class="completar-nacimiento">
         <img class="iconos-perfil" src="imagenes/icono-nacimiento.png">
         <input style="color: grey" type="text" class="form-completar-datos" id="fecha-nacimiento" name="birthday" value="{{ Auth::user()->birthday }}" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text" placeholder="Naci el ...">
         </div>

         <div class="completar-direccion">
         <img class="iconos-perfil" src="imagenes/icono-direccion.png">
         <input style="color: grey" type="text" class="form-completar-datos" id="direccion" name="location" value="{{ Auth::user()->location }}" placeholder="Vivo en ...">
         </div>

         <div class="completar-lugar-nac">
         <img class="iconos-perfil" src="imagenes/icono-lugar-nac.png">
         <input style="color: grey" type="text" class="form-completar-datos" id="lugar-nac" name="born_in" value="{{ Auth::user()->born_in }}" placeholder="Naci en ...">
         </div>

         <div class="completar-profesion">
         <img class="iconos-perfil" src="imagenes/icono-profesion.png">
         <input style="color: grey" type="text" class="form-completar-datos" id="profesion" name="phone" value="{{ Auth::user()->phone }}" placeholder="Mi celular es ...">
         </div>

         <div class="completar-estudie-en">
         <img class="iconos-perfil" src="imagenes/icono-estudie.png">
         <input style="color: grey" type="text" class="form-completar-datos" id="estudie-en" name="studies" value="{{ Auth::user()->studies }}" placeholder="Estudie en ...">
         </div>

         <h1 class="h1-perfil" id="interes">Intereses</h1>

         <div class="completar-musica">
         <img class="iconos-perfil" src="imagenes/icono-musica.png">
         <input style="color: grey" type="text" class="form-completar-datos" id="musica" name="music" value="{{ Auth::user()->music }}" placeholder="Mi música preferida es ...">
         </div>

         <div class="completar-hobbies">
         <img class="iconos-perfil" src="imagenes/icono-hobbie.png">
         <input style="color: grey" type="text" class="form-completar-datos" id="hobbies" name="hobbies" value="{{ Auth::user()->hobbies }}" placeholder="Mis hobbies son ...">
         </div>

         <button type="submit" name="usuario-datos-guardar">GUARDAR</button>

         </div>

         </form>

         </div>
@endsection