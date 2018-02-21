<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="../css/formulariomaterias.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript" src="../js/livevalidation_standalone.js"></script>
	<title>Alta materias</title>
		<style>
			@media only screen and (min-width: 176px) and (max-width:767px){
				table {
			    border-collapse: collapse;
			    width: 100%;
			    border: 1px solid #DDDDDD;
			    table-layout:fixed;
				}
				th:not(:nth-child(3)), td:not(:nth-child(3)) {
			    text-align: center;
			    padding: 8px;
			    border: 1px solid #DDDDDD;
			    width: 230px;
				}
				th:nth-child(3), td:nth-child(3){
						text-align: center;
				    padding: 8px;
				    border: 1px solid #DDDDDD;
				    width: 310px;
				}
			}
			@media only screen and (min-width: 768px){
				table {
			    border-collapse: collapse;
			    width: 100%;
			    border: 1px solid #DDDDDD;
				}
				th, td {
			    text-align: center;
			    padding: 8px;
			    border: 1px solid #DDDDDD;
			    width: 230px;
				}
			}
			tr:hover {background-color: #f5f5f5}
			th {
				text-align:center;
			  background-color: #29b6f6;
			  color: white;
			}
			<style>
			span {
  			color: #2793ff;
				}
		</style>
</head>
<body>
	<?php
		include('../header.html');
	?>
	<div class="contenedor-formulario">
	  	<div class="wrap">
		    <form action="InsertMaterias.php" class="formulario" name="formulario_registro" method="post" onsubmit="return validar_materias();">
		      	<div>
			        <div class="input-group">
			          <input type="text" id="clavemateria" name="clave" pattern="^[a-zA-Z\s0-9]*$" >
			          <label class="label" for="clave">Clave de Materia:</label>
			          <script type="text/javascript">
              		var clavemateria = new LiveValidation('clavemateria', { validMessage:"Correcto"});
              		clavemateria.add(Validate.Format, { pattern: /^[a-zA-Z\s0-9]/i });
            		</script>
			        </div>
			        <div class="input-group">
			          <input type="text" id="nombremateria" name="nombre" pattern="^[a-zA-Z\s0-9]*$" >
			          <label class="label" for="nombre">Nombre de la Materia:</label>
			          <script type="text/javascript">
              		var nombremateria = new LiveValidation('nombremateria', { validMessage:"Correcto"});
              		nombremateria.add(Validate.Format, { pattern: /^[a-zA-Z\s0-9]/i });
            		</script>
			        </div>
					<div align="center">
						<p class="pcol">Tipo de Materia</p>
					</div>
			        <div class="input-group">
			            <select name="tipomateria" id="tipo">
				            <option value="academico">Académico</option>
				            <option value="matematicas">Matemáticas</option>
				            <option value="sinergico">Sinérgico</option>
			        	</select>
		        </div>
				<div align="center">
				  <p class="pcol">Carreras</p>
				</div>
		        <div>
		            <input type="checkbox" id="bioquimica" name="materias[]" value="bioquimica"><label for="bioquimica">Ing. Bioquímica</label></br>
		        	<input type="checkbox" id="electrica" name="materias[]" value="electrica"><label for="electrica">Ing. Eléctrica</label></br>
		        	<input type="checkbox" id="electronica" name="materias[]" value="electronica"><label for="electronica">Ing. Electrónica</label></br>
		        	<input type="checkbox" id="ige" name="materias[]" value="ige"><label for="ige">Ing. en Gestión Empresarial</label></br>
		        	<input type="checkbox" id="industrial" name="materias[]" value="industrial"><label for="industrial">Ing. Industrial</label></br>
		        	<input type="checkbox" id="sistemas" name="materias[]" value="sistemas"><label for="sistemas">Ing. Sistemas Computacionales</label></br>
		        	<input type="checkbox" id="tics" name="materias[]" value="tics"><label for="tics">Ing. en Tecnologías de la Información y Comunicaciones</label></br>
		        	<input type="checkbox" id="materiales" name="materias[]" value="materiales"><label for="materiales">Ing. Materiales</label></br>
		        	<input type="checkbox" id="mecanica" name="materias[]" value="mecanica"><label for="mecanica">Ing. Mecánica</label></br>
		        	<input type="checkbox" id="mecatronica" name="materias[]" value="mecatronica"><label for="mecatronica">Ing. Mecatrónica</label></br>
		        	<input type="checkbox" id="administracion" name="materias[]" value="administracion"><label for="administracion">Lic. en Administración</label></br>
		        	<input type="checkbox" id="administracion" name="materias[]" value="contador"><label for="contador">Contador Público</label>         
		        </div>       
		        <input type="submit" id="btn-submit" value="Enviar">
		     	</div>
		    </form>
	  	</div>
	</div>
	<?php
		include('../footer.html');
	?>
	<script type="text/javascript">
	    $(document).ready(function(){
	    $('select').material_select();
	    });
	</script>
	<script type="text/javascript">
		function showHideShipInfo(){
			if (document.getElementById('Base').checked==true) {
				document.getElementById('mostrar').style.display='block';
			}else{
				document.getElementById('mostrar').style.display='none';
			}
		}
	</script>
	<style type="text/css">
		.pcol{
			color: #009688;
		}
		span {
  			color: #2793ff;
				}
	</style>
		<!--  Scripts-->
	<script src="../js/jquery.js"></script>
	<script src="../js/materialize.min.js"></script>
	<script src="../js/init.js"></script>
	<?php
    	include('../ScriptMenu.html');
  	?>
</body>
</html>