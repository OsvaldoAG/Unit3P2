<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Datos</title>
</head>
<body>
	<div class="card mt-3">
		<div class="card-header d-iniline-flex">
			<h5 Mostrar></h5>
			<a href="{{ route('inicio') }}" class="btn btn-primary ml-auto">Regresar</a>
			   <i class="fas fa-plus"></i>
			Agregar
            </a>
		</div>

		<div class="card-body">
		<a class="navbar-brand">Listar</a>
			<select class="custom-select">
				<option selected>Open this select menu</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
			</select>
			
			<a class="navbar-brand">Buscar</a>
			<imput class="form-control mr-sm-2" type="search" aria-label="search">
		</div>
    </div>
	
</body>
</html>