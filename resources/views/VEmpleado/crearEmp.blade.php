<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{action('EmpleadoController@store')}}" method="post">
		{{csrf_field()}}
		<label>CI</label> <input type="text" name="ci" required> <br> 
		<label>NOMBRES</label><input type="text" name="nombres" required> <br> 
		<label>APELLIDOS</label><input type="text" name="apellidos" required> <br> 
		<label>FECHANAC</label><input type="date" name="fechanac" required> <br> 
		<label>GENERO</label><input type="text" name="genero" required> <br> 
		<label>DIRECCION</label><input type="text" name="direccion" required> <br> 
		<label>CELULAR</label><input type="text" name="celular" required> <br> 
		<label>CARGO</label><input type="text" name="cargo" required>
		<button type="submit">ENVIAR</button>
	</form>
</body>
</html>