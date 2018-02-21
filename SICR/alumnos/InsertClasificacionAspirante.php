<?php
	require '../Classes/PHPExcel/IOFactory.php';
	include('../conexion.php');
		echo $_FILES['archivo']['type'];
	if ($_FILES['archivo']['error'] > 0){
		print "<script>alert('El tipo de archivo no es aceptado')</script>";
		print("<script>window.location.replace('ClasificacionAspirante.php');</script>");
	}
	else{
		move_uploaded_file($_FILES['archivo']['tmp_name'], 'ArchivosExcel/' . $_FILES['archivo']['name'] );
		
		$opcion =  $_POST["opcion"];
		
		$nombreArchivo = "ArchivosExcel/" . $_FILES["archivo"]["name"];
		
		$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
		
		$objPHPExcel->setActiveSheetIndex(0);
		
		$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
		
		if ($opcion == 2){
			/*echo '<table border=1>';
			for($i = 1; $i <= $numRows; $i++){
				$Nombre = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$AP_paterno = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				$AP_materno = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				$titulo = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
				$nivel = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
				$cedula= $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();

				$tipo= $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
				$departamento_de_adscripcion= $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
				$status= $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
				$curp = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
				$edo_civil = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
				$telefono = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
				$celular = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();

				$correo_electronico = $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
				$estado = $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
				$colonia = $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
				$calle = $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
				$numero = $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();

				$codigo_postal = $objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
				$nombramiento = $objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
				$fecha_de_ingreso = $objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();
				$departamento = $objPHPExcel->getActiveSheet()->getCell('V'.$i)->getCalculatedValue();
				
				
				
				/*$sql = "INSERT INTO aspirantes (no_solicitud, nombre, apellido_p, apellido_m, carrera, escuela_procedencia, bachillerato, fecha_nacimiento, correo, telefono, nombre_emergencia, telefono_emergencia, talla) VALUES ('$Solicitud', '$Nombre', '$ApellidoP', '$ApellidoM', '$Carrera', '$EscuelaProcedencia', '$Bachillerato', '$FechaNacimiento', '$Correo', $Telefono, '$NombreEmergencia', $TelefonoEmergencia, '$Talla')";

				$result = pg_query($dbconn, $sql) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());*/

					/*echo '<tr>';
					echo '<td>'.$Nombre.'</td>';
					echo '<td>'.$AP_paterno.'</td>';
					echo '<td>'.$AP_materno.'</td>';
					echo '<td>'.$titulo.'</td>';
					echo '<td>'.$nivel.'</td>';
					echo '<td>'.$cedula.'</td>';
					echo '<td>'.$tipo.'</td>';
					echo '<td>'.$departamento_de_adscripcion.'</td>';
					echo '<td>'.$status.'</td>';
					echo '<td>'.$curp.'</td>';
					echo '<td>'.$edo_civil.'</td>';
					echo '<td>'.$telefono.'</td>';
					echo '<td>'.$celular.'</td>';

					echo '<td>'.$correo_electronico.'</td>';
					echo '<td>'.$estado.'</td>';
					echo '<td>'.$colonia.'</td>';
					echo '<td>'.$calle.'</td>';
					echo '<td>'.$numero.'</td>';
					echo '<td>'.$codigo_postal.'</td>';

					echo '<td>'.$nombramiento.'</td>';
					echo '<td>'.$fecha_de_ingreso.'</td>';
					echo '<td>'.$departamento.'</td>';
				

					echo '</tr>';
			}
			echo '</table>';*/
		}
		elseif ($opcion == 1) {
			for($i = 2; $i <= $numRows; $i++){
				$no_solicitud = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$grupo = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				
				$sql = "INSERT INTO Clasificacion(no_solicitud, id_grupo) VALUES ('$no_solicitud','$grupo')";
				$result = pg_query($dbconn, $sql) or die('<script language="javascript">alert("Error en el Servidor");</script> <script>window.location.replace("ClasificacionAspirante.php");</script>');
				
			}
			print "<script>alert('Los registros fueron guardados con éxito')</script>";
			print("<script>window.location.replace('ClasificacionAspirantes.php');</script>");
		}
		else{
			echo "error";
		}
	}
		
?>