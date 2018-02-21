<!DOCTYPE html>
<html lang="es">
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="../css/formularioaspirantes.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript" src="../js/validar_profesor.js"></script>
    <script type="text/javascript" src="../js/livevalidation_standalone.js"></script>
  	<title>Alta Profesor</title>
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
  </head>
  <body>
      <?php
        include('../conexion.php');
        $sql='select Estado_id, Nombre from Estados order by Nombre asc';
        $sql2='select Municipio_ID, Nombre from Municipios order by Nombre asc';
        $sql3='select colonia_id,nombre,cp from colonias order by  colonia_id asc';
        $sql4='select colonia_id, cp from colonias ';
        $result = pg_query($dbconn, $sql);
        $result2 = pg_query($dbconn, $sql2);
        $result3 = pg_query($dbconn, $sql3);
        pg_close($dbconn);
    	  include('../header.html');
    	?>

      <a href="ExcelProfesor.php"  id="view-source" class="mdl-button  mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Importar Excel</a>

  <div class="contenedor-formulario">
    <div class="wrap">
      <form action="InsertProfesor.php" class="formulario" name="formulario_registro" method="post" onsubmit="return validar_profesor();">
        <div>
          
            <div class="input-group">
            <input type="text" id="nombrep" name="nombre" required  pattern="^[a-zA-Z\s]*$" maxlength="40">
            <label class="label" id="nombrec" for="nombre">Nombre:</label> 
            <script type="text/javascript">
              var nombrep = new LiveValidation('nombrep', { validMessage:"Correcto"});
              nombrep.add(Validate.Format, { pattern: /^[a-zA-Z\s]/i });
            </script>
          </div>
          <div class="input-group">
            <input type="text" id="AP_paterno" name="AP_paterno" required  pattern="^[a-zA-Z\s]*$" maxlength="40" >
            <label class="label" for="AP_paterno">Apellido paterno:</label>
              <script type="text/javascript">
                var AP_paterno = new LiveValidation('AP_paterno', { validMessage:"Correcto"});
                AP_paterno.add(Validate.Format, { pattern: /^[a-zA-Z\s]/i });
              </script>
          </div>
          <div class="input-group">
            <input type="text" id="AP_materno" name="AP_materno" required  pattern="^[a-zA-Z\s]*$" maxlength="40">
            <label class="label" for="AP_materno">Apellido materno:</label>
            <script type="text/javascript">
                  var AP_materno = new LiveValidation('AP_materno', { validMessage:"Correcto"});
               AP_materno.add(Validate.Format, { pattern: /^[a-zA-Z\s]/i });
             </script>
          </div>
          <div class="input-group">
              <input type="text" id="titulo" name="titulo" required  pattern="^[a-zA-Z\s]*$" maxlength="80" >
              <label class="label" for="cedula">titulo:</label>
               <script type="text/javascript">
                  var titulo = new LiveValidation('titulo', { validMessage:"Correcto"});
               titulo.add(Validate.Format, { pattern: /^[a-zA-Z\s]/i });
             </script>
          </div>
          <div align="center">
          	<p class="pcol">Nivel de estudio</p>
          </div>
          <div class="input-group radio">
            <input type="radio" id="licenciatura" name="nivel" value="licenciatura">
            <label class="label" for="licenciatura">Licenciatura</label>
            <input type="radio" id="maestria" name="nivel" value="maestria">
            <label class="label" for="maestria">Maestría</label>
            <input type="radio" id="doctorado" name="nivel" value="doctorado">
            <label class="label" for="doctorado">Doctorado</label>
              <input type="radio" id="postgrado" name="nivel" value="postgrado">
            <label class="label" for="postgrado">Postdoctorado</label>
          </div>
          <div class="input-group"> 
            <input type="text" id="cedula" name="cedula" required  pattern="^[a-zA-Z0-9]*$" maxlength="80" >
            <label class="label" for="cedula">Cédula:</label>
            <script type="text/javascript">
                  var cedula = new LiveValidation('cedula', { validMessage:"Correcto"});
               cedula.add(Validate.Format, { pattern: /^[a-zA-Z0-9]/i });
             </script>
          </div>
           <div class="input-group"> 
            <input type="text" id="rfc" name="rfc" required  pattern="^[a-zA-Z0-9]*$" maxlength="80" >
            <label class="label" for="rfc">RFC</label>
             <script type="text/javascript">
                  var rfc = new LiveValidation('rfc', { validMessage:"Correcto"});
               rfc.add(Validate.Format, { pattern: /^[a-zA-Z0-9]/i });
             </script>
          </div>
          
            <div align="center">
  	          <p class="pcol">Tipo</p>
  		      </div>
          <div class="input-group radio">
            <input type="radio" name="tipo" id="interino" value="interino" onclick="showHideShipInfo()" >
            <label for="interino">Interino</label>
            <input type="radio" name="tipo" id="Base" value="base" onclick="showHideShipInfo()">
            <label for="Base">Base</label>
          </div>
                
           <div class="input-group" id="mostrar" style="display:none;" >
            <input type="text" id="clave_presupuestal" name="clave_presupuestal"  pattern="^[a-zA-Z]*$"  >
            <label class="label" for="clave_presupuestal">clave presupuestal:</label>

             <script type="text/javascript">
                var clave_presupuestal = new LiveValidation('clave_presupuestal', { validMessage:"Correcto"});
                clave_presupuestal.add(Validate.Format, { pattern: /^[a-zA-Z]/i });
            </script>
          </div>
          <!--
           <div class="input-group">
            <input type="text" id="departamento_de_adscripcion" name="departamento_de_adscripcion" required  pattern="^[a-zA-Z]*$" maxlength="80" >
            <label class="label" for="departamento_de_adscripcion">departamento de adscripcion: </label>
               <script type="text/javascript">
                var departamento_de_adscripcion = new LiveValidation('departamento_de_adscripcion', { validMessage:"Correcto"});
             departamento_de_adscripcion.add(Validate.Format, { pattern: /^[a-zA-Z]/i });
            </script>
          </div>
        -->
          <p class="pcol">Status</p>
          <div class="input-group radio">
            <input type="radio" name="status" id="activo" value="activo">
            <label for="activo">Activo</label>
            <input type="radio" name="status" id="inactivo" value="inactivo" ">
            <label for="inactivo">Inactivo</label>
          </div>
  		    <div class="input-group">
            <input type="text" id="curp" name="curp" required  pattern="^[a-zA-Z0-9]*$" maxlength="20"  >
            <label class="label" for="curp">Curp: </label>
             <script type="text/javascript">
                  var curp = new LiveValidation('curp', { validMessage:"Correcto"});
               curp.add(Validate.Format, { pattern: /^[0-9a-zA-Z]/i });
              </script>
          </div>
          <p class="pcol">Estado civil</p>
  	      <div class="input-group radio">
            <input type="radio" name="edo_civil" id="edo_civil" value="Soltero">
            <label for="edo_civil">Soltero</label>
            <input type="radio" name="edo_civil" id="edo_civil2" value="Casado" >
            <label for="edo_civil2">Casado</label>
          </div>
          <div class="input-group">
            <input type="text" id="telefono" name="telefono" required  pattern="^[0-9]*$" maxlength="20">
            <label class="label" for="telefono">Teléfono: </label>
            <script type="text/javascript">
              var telefono = new LiveValidation('telefono', { validMessage:"Correcto"});
              telefono.add(Validate.Numericality, { minimum: 1, maximum: 100000000000, onlyInteger: true });
            </script>
          </div>
          <div class="input-group">
            <input type="text" id="celular" name="celular" required  pattern="^[0-9]*$" maxlength="20"  >
            <label class="label" for="celular">Celular: </label>
              <script type="text/javascript">
                  var celular = new LiveValidation('celular', { validMessage:"Correcto"});
               celular.add(Validate.Numericality, { minimum: 1, maximum: 100000000000, onlyInteger: true });
              </script>
          </div>
           <div class="input-group">
            <input type="email" id="correo" name="correo"  >
            <label class="label" for="correo">Correo: </label>
              <script type="text/javascript">
                  var correo = new LiveValidation('correo', { validMessage:"Correcto"});
               correo.add(Validate.Email);
              </script>
          </div>
          <p class="pcol">Estado</p>
          <div class="input-group">
             <select name="estado" id="estado">
               <option value="">Seleccionar</option>
               <?php
               while($fila= pg_fetch_array($result)){
                echo"<option value'".$fila['0']."'>".$fila['1']."</option>";
               }
               ?>
             </select>
          </div>
          <p class="pcol">Municipio</p>
          <div class="input-group"> 
             <select name="municipio" id="municipio">
               <option value="">Seleccionar</option>
                <?php
                 while($fila2= pg_fetch_array($result2)){
                  echo"<option value'".$fila2['0']."'>".$fila2['1']."</option>";
                 }
                 ?>
             </select>
          </div>
          <p class="pcol">colonia</p>
          <div class="input-group">
             <select name="colonia" id="colonia">
              <option value="">Seleccionar</option> 
              <?php
             
                 while($fila3= pg_fetch_array($result3)){
                  echo"<option value'".$fila3['0']."'>".$fila3['1']."</option>";

                 }
                 
                 ?>
               </select>
          </div>
          <div class="input-group">
            <input type="text" id="calle" name="calle" required  pattern="^[a-zA-Z\s]*$" maxlength="80"  >
            <label class="label" for="calle">Calle: </label>
              <script type="text/javascript">
                  var calle = new LiveValidation('calle', { validMessage:"Correcto"});
               calle.add(Validate.Format, { pattern:  /^[a-zA-Z\s]/i });
              </script>
          </div>
          <div class="input-group">
            <input type="text" id="numero" name="numero" required  pattern="^[0-9]*$" maxlength="20" >
            <label class="label" for="numero">Número: </label>
               <script type="text/javascript">
                    var numero = new LiveValidation('numero', { validMessage:"Correcto"});
                 numero.add(Validate.Numericality, { minimum: 1, maximum: 100000000000, onlyInteger: true });
                </script>
          </div>
          <div class="input-group">
            <input type="text" id="cp" name="cp" required  pattern="^[0-9]*$" maxlength="20" >
            <label class="label"  for="numero">Codigo postal: </label>
              <script type="text/javascript">
                  var cp = new LiveValidation('cp', { validMessage:"Correcto"});
               cp.add(Validate.Numericality, { minimum: 1, maximum: 100000000000, onlyInteger: true });
              </script>
              <p class="pcol">Nombramiento</p>
          <div class="input-group radio">
            <input type="radio" name="nombramiento" id="docente" value="docente">
            <label for="docente">Docente</label>
            <input type="radio" name="nombramiento" id="administrativo" value="administrativo" ">
            <label for="administrativo">Administrativo</label>
          </div>

          <div class="input-group">
            <input type="date" class="datepicker" id="fecha" name="fecha" style="color:#009688">
          </div>

          <p class="pcol">Seleccionar departamento</p>
          <div class="input-group">
            <select name="departamento" id="">
              <option value="">Seleccionar</option>
              <option value="desarrollo_academico">Desarrollo académico</option>
              <option value="sistemas_computacion">Sistemas y computación</option>
              <option value="economico_admi">Económico administrativo</option>
              <option value="quimica_Y_bioquimica">Química y Bioquímica</option>
              <option value="material_y_mecanica">Materiales y Mecanica</option>
              <option value="industrial">Industrial</option>
              <option value="electrica">Electrica y Electrónica</option>
              <option value="ciencia_basica">Ciencias básicas</option>
              <option value="IGE">IGE</option>
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
    			document.getElementById('mostrar').style.display='block';
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