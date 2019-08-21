<!DOCTYPE html>
<html>
<head>
	<title>Agregar nueva empresa</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

		<form method="post" action="{{action('EmpresaController@update', $id)}}" class="container" style="margin-top: 50px">
		@csrf
			<h1>Editar empresa</h1>
		<div class="row form-group">
			<div class="col">
				<input type="text" name="rfc" placeholder="RFC" class="form-control" value="{{$empresa->RFC}}">
			</div>
			<div class="col">
				<input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{$empresa->nombre}}">
			</div>
		</div>

		<div class="row form-group">
			<div class="col">
				<input type="text" name="direccion" placeholder="Dirección" class="form-control" value="{{$empresa->direccion}}">
			</div>
			<div class="col">
				<input type="text" name="sitioWeb" placeholder="Sitio Web" class="form-control" value="{{$empresa->sitioWeb}}" >
			</div>	
		</div>

		<div class="row form-group">
			<div class="col">
				<input type="text" name="telefono" placeholder="Telefono" class="form-control" value="{{$empresa->telefono}}">
			</div>
			<div class="col">
				<input type="text" name="contacto" placeholder="Contacto" class="form-control" 
				value="{{$empresa->contacto}}">
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col">
				<input type="text" name="email" placeholder="Email" class="form-control" value="{{$empresa->email}}">
			</div>
			<div class="col">
				<input type="file" name="logotipo" placeholder="Ingresa el logo" class="form-control" value="{{$empresa->logotipo}}">
			</div>		
		</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</form>

</body>
</html>