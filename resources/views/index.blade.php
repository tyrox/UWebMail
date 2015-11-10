@extends('Bindex')

@section('contenido')
 @foreach($usuarios as $usuario)
 	@if($usuario->User == 'bsibaja')
 		<p>Usuario: {{$usuario->User}}</p>
 		<p>Nombre: {{$usuario->Name}}</p>
 		<p>E-mail: {{$usuario->email}}</p>
 		<p>Id: {{$usuario->Id}}</p>
 		<p>Contraseña: {{$usuario->Password}}</p>
 	@endif
 @endforeach
@stop
