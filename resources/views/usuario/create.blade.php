@extends('layouts.admin')

@section('contenido')


{!!Form::open()!!}

<div class="form-group">
	{!!Form::label('Nombre')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese un nombre'])!!}
</div>
<div class="form-group">
	{!!Form::label('Direccion')!!}
	{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese una direccion'])!!}
</div>
<div class="form-group">
	{!!Form::label('Telefono')!!}
	{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingrese un telefono'])!!}
</div>
<div class="form-group">
	{!!Form::label('Usuario')!!}
	{!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'Ingrese un usuario'])!!}
</div>

<div class="form-group">
	{!!Form::label('Correo')!!}
	{!!Form::email('correo',null,['class'=>'form-control','placeholder'=>'Ingrese un email',])!!}
</div>
<div class="form-group">
	{!!Form::label('Password')!!}
	{!!Form::password('password',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::submit('enviar',null,['class'=>'btn btn-primary'])!!}
</div>
{!!Form::close()!!}
@stop