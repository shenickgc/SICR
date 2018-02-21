<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
	  	<link href="../css/formulariogrupo.css" type="text/css" rel="stylesheet"/>
	  	<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
		<title>Alta grupo</title>
	</head>
	<body>
		<?php
			include('../header.html');
		?>
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
		</style>

<div class="contenedor-formulario">
  	<div class="wrap">
   		<form action="InsertGrupo.php" class="formulario" name="formulario_registro" method="post" onsubmit="return validar_materias();">
      		<div>
		        <?php
					include('../conexion.php');
					$sql = "select * from materias";
					$resultado = pg_query($dbconn, $sql) or die('<script language="javascript">alert("Error en el Servidor");</script> <script>window.location.replace("index.php");</script>');
					?>
				<div align="center">
				  <p class="pcol">Clave Materia</p>
				</div>

				<div class="input-group">
				<select name="id_materia" id="id_materia">
				<?php
					while($lista = pg_fetch_assoc($resultado))
						echo "<option value'" . $lista['id_materia'] . "'>" . $lista['id_materia'] . "</option>";
				?>
				</select>
			</div>
        <div class="input-group">
          <input type="text" id="clavegrupo" name="grupo" >
          <label class="label" for="grupo">Clave del Grupo:</label>
        </div>
        <?php
			$sql = "select * from profesor";
			$resultado = pg_query($dbconn, $sql);?>
			<div align="center">
				 <p class="pcol">RFC del profesor</p>
			</div>
			<div class="input-group">
				<select name="rfc" id="rfc">
					<?php
						while($lista = pg_fetch_assoc($resultado))
						echo "<option value'" . $lista['rfc_profesor'] . "'>" . $lista['rfc_profesor'] . "</option>";

		pg_close($dbconn);
		?>
		</select>
		</div>
        <div class="input-group">
          <input type="text" id="limite" name="limite" >
          <label class="label" for="limite">Limite:</label>
        </div>
        <div class="input-group">
          <input type="text" id="aula" name="aula" >
          <label class="label" for="aula">Aula:</label>
        </div>
		<div align="center">
			<p class="pcol">Horario</p>
		</div>

		        <div class="input-group">
		            <select name="horario" id="horario">
		            <option value="7:00">7:00</option>
		            <option value="8:00">8:00</option>
		            <option value="9:00">9:00</option>
		            <option value="10:00">10:00</option>
		            <option value="11:00">11:00</option>
		            <option value="12:00">12:00</option>
		            <option value="13:00">13:00</option>
		            <option value="14:00">14:00</option>
		            <option value="15:00">15:00</option>
		            <option value="16:00">16:00</option>
		            <option value="17:00">17:00</option>
		            <option value="18:00">18:00</option>
		            <option value="19:00">19:00</option>
		        
		        </select>
		         
		        </div>

		<div align="center">
		  <p class="pcol">Periodo</p>
		</div>

		        <div class="input-group">
		            <select name="periodo" id="periodo">
		            <option value="ene-jun">Enero-Junio</option>
		            <option value="verano">Verano</option>
		            <option value="ago-dic">Agosto-Diciembre</option>
		        
		        </select>
		         
		        </div>

		</div>

		<div align="center">
		  <p class="pcol">Año</p>
		</div>
		        <div class="input-group">
		            <select name="año" id="año">
		            <option value="2017">2017</option>
		            <option value="2018">2018</option>
		            <option value="2019">2019</option>
		            <option value="2020">2020</option>
		            <option value="2021">2021</option>
		            <option value="2022">2022</option>
		            <option value="2023">2023</option>
		            <option value="2024">2024</option>
		            <option value="2025">2025</option>
		            <option value="2026">2026</option>
		            <option value="2027">2027</option>
		            <option value="2028">2028</option>
		            <option value="2029">2029</option>
		            <option value="2030">2030</option>
		            <option value="2031">2031</option>
		            <option value="2032">2032</option>
		            <option value="2033">2033</option>
		            <option value="2034">2034</option>
		            <option value="2035">2035</option>
		            <option value="2036">2036</option>
		            <option value="2037">2037</option>
		            <option value="2038">2038</option>
		            <option value="2039">2039</option>
		            <option value="2040">2040</option>
		        
		        </select>
		         
		        </div>
		        <input type="submit" id="btn-submit" value="Enviar">
		      </div>
		    </form>
		  </div>
		</div>
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
	</style>
	<?php
	include('../footer.html');
	?>
		<!--  Scripts-->
	<script src="../js/jquery.js"></script>
	<script src="../js/materialize.min.js"></script>
	<script src="../js/init.js"></script>
	<script type="text/javascript">
	    $(document).ready(function(){
	    $('select').material_select();
	    });
  	</script>
	<?php
    	include('../ScriptMenu.html');
  	?>
</body>
</html>