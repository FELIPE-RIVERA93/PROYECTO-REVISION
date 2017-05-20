<!DOCTYPE html>
<html>
<head>
	<title>Registro cliente</title>
	<meta charset="utf8">
		<meta name="viewport" content="width=device=width,initial=scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="row">
		<div class="col-md-6 col-xs-12 text-left">
			<label>Matricula</label><br>
			<input id="txtmatricula" type="text" maxlength="11">
		</div>
		<div class="col-md-6 col-xs-12 text-left">
			<label>Nombre</label><br>
			<input id="txtnombre" type="text" maxlength="100">
		</div>
	</div>


	<div class="row">
		<div class="col-md-6 col-xs-12 text-left">
			<label>Apellido Paterno</label><br>
			<input id="txtpaterno" type="text" maxlength="50">
		</div>
		<div class="col-md-6 col-xs-12 text-left">
			<label>Apellido Materno</label><br>
			<input id="txtmaterno" type="text" maxlength="40">
		</div>
	</div>


	<div class="row">
		<div class="col-md-6 col-xs-12 text-left">
			<label>Direccion</label><br>
			<input id="txtdireccion" type="text" maxlength="40">
		</div>
		<div class="col-md-6 col-xs-12 text-left">
			<label>Telefono</label><br>
			<input id="txttelefono" type="text" maxlength="10">
		</div>
	</div>


	<div class="row">
	<div class="col-md-6 col-xs-12 text-left">
			<label>Correo</label><br>
			<input id="txtcorreo" type="text" maxlength="30">
		</div>


	</div>
	<div class="row">
		<button id="btnregistro" class="btn btn-success" onclick="capturaDatosCliente()">
			<span class="glyphicon glyphicon-save"></span>
			Registrar Información
		</button>
	</div>
	<div id="respuesta" class="row"></div>







	<script src="js/jquery.js"
			type="text/javascript"></script>
	<script src="js/bootstrap.min.js"
			type="text/javascript"></script>
	<script src="js/registrocliente.js" 
			type="text/javascript" ></script>
</body>
</html>