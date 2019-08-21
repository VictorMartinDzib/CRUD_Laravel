<!DOCTYPE html>
<html>
<head>
	<title>Agregar nueva empresa</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

		<form method="post" action="{{url('empresas')}}" class="container" style="margin-top: 50px">
		@csrf
			<h1>Registra una nueva empresa</h1>
		<div class="row form-group">
			<div class="col">
				<input type="text" name="rfc" placeholder="RFC" class="form-control">
			</div>
			<div class="col">
				<input type="text" name="nombre" placeholder="Nombre" class="form-control">
			</div>
		</div>

		<div class="row form-group">
			<div class="col">
				<input type="text" name="direccion" placeholder="Dirección" class="form-control">
			</div>
			<div class="col">
				<input type="text" name="sitioWeb" placeholder="Sitio Web" class="form-control">
			</div>	
		</div>

		<div class="row form-group">
			<div class="col">
				<input type="text" name="telefono" placeholder="Telefono" class="form-control">
			</div>
			<div class="col">
				<input type="text" name="contacto" placeholder="Contacto" class="form-control">
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col">
				<input type="text" name="email" placeholder="Email" class="form-control">
			</div>
			<div class="col">
				<input type="file" name="logotipo" placeholder="Ingresa el logo" class="form-control">
			</div>		
		</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</form>

</body>
</html>