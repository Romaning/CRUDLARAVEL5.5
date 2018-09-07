<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<form action="{{action('EmpleadoController@update',$var->id)}}" method="post">
		{{csrf_field()}}
		<input name="_method" type="hidden" value="PATCH">
		<label>CI</label> <input type="text" name="ci" required value="{{$var->ci}}"> <br> 
		<label>NOMBRES</label><input type="text" name="nombres" required value="{{$var->nombres}}"> <br> 
		<label>APELLIDOS</label><input type="text" name="apellidos" required value="{{$var->apellidos}}"> <br> 
		<label>FECHANAC</label><input type="date" name="fechanac" required value="{{$var->fechanac}}"> <br> 
		<label>GENERO</label><input type="text" name="genero" required value="{{$var->genero}}"> <br> 
		<label>DIRECCION</label><input type="text" name="direccion" required value="{{$var->direccion}}"> <br> 
		<label>CELULAR</label><input type="text" name="celular" required value="{{$var->celular}}"> <br> 
		<label>CARGO</label><input type="text" name="cargo" required value="{{$var->cargo}}">
		<button type="submit">ENVIAR</button>
	</form>
</body>
</body>
</html>