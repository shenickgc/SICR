<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="../css/formularioaspirantes.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript" src="../js/validar_profesor.js"></script>
  	<script type="text/javascript" src="../js/livevalidation_standalone.js"></script>
	<title>Alta aspirante</title>
</head>
<body>
	<?php
        include('../conexion.php');
        $sql='select * from carreras';
        $result = pg_query($dbconn, $sql);
        pg_close($dbconn);
    	  include('../header.html');
    ?>
	<a href="InsertExcelAspirantes.php" id="view-source" class="mdl-button  mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Importar Excel</a>
	</form>

	<style>
		span {
  color: #2793ff;
}
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
		    <form action="InsertAspirante.php" class="formulario" name="formulario_registro" method="post" onsubmit="return validar_profesor();">
		      <div>
		        <div class="input-group">
		          <input type="text" id="no_solicitud" name="no_solicitud" required maxlength="40" pattern="^[0-9]*$">
		          <label class="label" for="No_solicitud">Número de solicitud:</label>
		           <script type="text/javascript">
              		var no_solicitud = new LiveValidation('no_solicitud', { validMessage:"Correcto"});
              		no_solicitud.add(Validate.Format, { pattern: /^[0-9]/i });
            		</script>
		        </div>
		        <div class="input-group">
		          <input type="text" id="nombres" name="nombres" required  pattern="^[a-zA-Z\s]*$" maxlength="40">
		          <label class="label" for="nombres">Nombre(s):</label>
		           <script type="text/javascript">
              		var nombres = new LiveValidation('nombres', { validMessage:"Correcto"});
              		nombres.add(Validate.Format, { pattern: /^[a-zA-Z\s]/i });
            		</script>
		        </div>
		        <div class="input-group">
		          <input type="text" id="apellido_p" name="apellido_p" required  pattern="^[a-zA-Z\s]*$" maxlength="40">
		          <label class="label" for="apellido_p">Apellido paterno:</label>
		          <script type="text/javascript">
              		var apellido_p = new LiveValidation('apellido_p', { validMessage:"Correcto"});
              		apellido_p.add(Validate.Format, { pattern: /^[a-zA-Z\s]/i });
            		</script>
		        </div>
		        <div class="input-group">
		          <input type="text" id="apellido_m" name="apellido_m" required  pattern="^[a-zA-Z\s]*$" maxlength="40">
		          <label class="label" for="apellido_m">Apellido materno:</label>
		          <script type="text/javascript">
              		var apellido_m = new LiveValidation('apellido_m', { validMessage:"Correcto"});
              		apellido_m.add(Validate.Format, { pattern: /^[a-zA-Z\s]/i });
            		</script>
		        </div>
		        <div class="input-group">
				  <label class="label" for="carrera">Carrera: </label></br>
				</div>
				<div class="input-group">
				    <select name="carrera" id="carrera">
				        <option value="">Seleccionar</option> 
              			<?php
                 			while($fila= pg_fetch_array($result)){
                  				echo"<option value'".$fila['0']."'>".$fila['1']."</option>";
                 			}
                 		?>
					</select>
				</div>
		        <div class="input-group">
		          <input type="text" id="escuela_procedencia" name="escuela_procedencia"  required  pattern="^[a-zA-Z\s0-9]*$" maxlength="50">
		          <label class="label" for="escuela_procedencia">Escuela de procedencia:</label>
		          <script type="text/javascript">
              		var escuela_procedencia = new LiveValidation('escuela_procedencia', { validMessage:"Correcto"});
              		escuela_procedencia.add(Validate.Format, { pattern: /^[a-zA-Z\s0-9]/i });
            		</script>
		        </div>
		        <div class="input-group">
		          <input type="text" id="bachillerato" name="bachillerato" required  pattern="^[a-zA-Z\s0-9]*$" maxlength="40">
		          <label class="label" for="bachillerato">Bachillerato:</label>
		          <script type="text/javascript">
              		var bachillerato = new LiveValidation('bachillerato', { validMessage:"Correcto"});
              		bachillerato.add(Validate.Format, { pattern: /^[a-zA-Z\s0-9]/i });
            		</script>
		        </div>
		        <div class="input-group">
		          <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required maxlength="40" style="color: #009688">
		          
		        </div>
		        <div class="input-group">
		          <input type="email" id="correo" name="correo" required maxlength="50" >
		          <label class="label" for="correo">Correo:</label>
		          <script type="text/javascript">
                  var correo = new LiveValidation('correo', { validMessage:"Correcto"});
               		correo.add(Validate.Email);
              	</script>
		        </div>
		      	<div class="input-group">
		          <input type="text" id="telefono" name="telefono" required  pattern="^[0-9]*$" maxlength="20">
		          <label class="label" for="telefono">Teléfono:</label>
		          <script type="text/javascript">
              	var telefono = new LiveValidation('telefono', { validMessage:"Correcto"});
              	telefono.add(Validate.Numericality, { minimum: 1, maximum: 100000000000, onlyInteger: true });
            	</script>
		        </div>
		        
		       	<div class="input-group">
		          <input type="text" id="nombre_emergencia" name="nombre_emergencia"  required  pattern="^[a-zA-Z\s]*$" maxlength="80" >
		          <label class="label" for="nombre_emergencia">Nombre de contacto en caso de emergencia:</label>
		          <script type="text/javascript">
              		var nombre_emergencia = new LiveValidation('nombre_emergencia', { validMessage:"Correcto"});
              		nombre_emergencia.add(Validate.Format, { pattern: /^[a-zA-Z\s]/i });
            		</script>
		        </div>
		        <div class="input-group">
		        <input type="text" id="telefono_emergencia" name="telefono_emergencia" required  pattern="^[0-9]*$" maxlength="20">
		        <label class="label" for="telefono_emergencia">Teléfono de emergencia:</label>
		        </div>
		        <script type="text/javascript">
				    var telefono = new LiveValidation('telefono_emergencia', { validMessage:"Correcto"});
				   	telefono.add(Validate.Numericality, { minimum: 1, maximum: 100000000000, onlyInteger: true });
				</script>
		        <div class="input-group">
				  <label class="label" for="talla">Talla de playera: </label></br>
				</div>
		        <div class="input-group">
				    <select name="talla" id="talla">
				        <option value="CH">CH</option>
				        <option value="M">M</option>
				        <option value="G">G</option>
					</select>
				</div>
				
				<div class="input-group">
				<label class="label" for="sexo">Sexo</label><br>
				</div>
				<div class="input-group radio">
          		<input type="radio" name="sexo" id="sexoM" value="masculino">
          		<label for="sexoM">Masculino</label>
         	 	<input type="radio" name="sexo" id="sexoF" value="femenino">
          		<label for="sexoF">Femenino</label>
        		</div>
        		

		        <input type="submit" id="btn-submit" value="Enviar" >
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