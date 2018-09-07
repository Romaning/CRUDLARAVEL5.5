<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<a href="{{action('EmpleadoController@create')}}">CREAR EMPLEADO</a>
<table>
	<tr>
		<td>CI</td>
		<td>NOMBRES</td>
		<td>APELLIDOS</td>
		<td>FECHANAC</td>
		<td>GENERO</td>
		<td>DIRECCION</td>
		<td>CELULAR</td>
		<td>CARGO</td>
		<td></td>
		<td></td>
	</tr>
	@foreach($dat as $row)
		<tr>
			<td>{{$row->ci}}</td>
			<td>{{$row->nombres}}</td>
			<td>{{$row->apellidos}}</td>
			<td>{{$row->fechanac}}</td>
			<td>{{$row->genero}}</td>
			<td>{{$row->direccion}}</td>
			<td>{{$row->celular}}</td>
			<td>{{$row->cargo}}</td>
			<td>
				<a href="{{action('EmpleadoController@edit',$row->id)}}" method="POST">
					{{csrf_field()}}
					<input name="_method" type="hidden" value="EDIT"> 
					<button type="submit">EDITAR</button>
				</form>
			</td>
			<td>
				<form action="{{action('EmpleadoController@destroy',$row->id)}}" method="POST">
					{{csrf_field()}}
					<input name="_method" type="hidden" value="DELETE">
					<button type="submit">ELIMINAR</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
</body>
</html>