@extends('layouts.admin')

@section('contenido')
<form action="" method="get">
	<div class="form-group">
		<label for="">Nombre</label>
		<input type="text" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Correo</label>
		<input type="text" class="form-control">
	</div>
		<div class="form-group">
		<label for="">Password</label>
		<input type="text" class="form-control">
	</div>
	<button class="btn btn-primary">Registrar</button>
</form>
@stop