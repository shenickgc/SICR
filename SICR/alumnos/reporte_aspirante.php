<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="/vinc/css/formulariogrupo.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
  <!--<script type="text/javascript" src="../js/validar_profesor.js"></script>-->
  <script src="../js/jquery.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/init.js"></script>
  <style type="text/css">
  .bg1 { background:#088A68; color:#FFF; }
  </style>
  <!--<link rel="stylesheet" type="text/css" href="../css/font.css">
  <link rel="stylesheet" type="text/css" href="../css/materialize_calendar.min.css">-->
  
  <script type="text/javascript">
    
    $(document).ready(function(){
    $('select').material_select();
    });

  </script>
  <title>Semestre cero</title>
</head>
<body>
  <?php
  //echo $_SERVER["REQUEST_URI"];
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

  </br></br>

  <div class="container" align="center">

<?php
echo "<table class='responsive-table centered striped highlight'>
    <thead>
    <tr>
      <th>Carrera</th>
      <th></th>
    </tr>
    </thead>";
    echo "<tbody>";
    echo "
          <tr>
           <td>".'Ing. Bioquímica'."</td>
           <td>"."<a href=credencial_bioquimica.php> Descargar Credenciales</a>"."</td>
          </tr>

          <tr>
           <td>".'Ing. Eléctrica'."</td>
           <td>"."<a href=credencial_electrica.php> Descargar Credenciales</a>"."</td>
          </tr>

          <tr>
           <td>".'Ing. Electrónica'."</td>
           <td>"."<a href=credencial_electronica.php> Descargar Credenciales</a>"."</td>
          </tr>

          <tr>
           <td>".'Ing. en Gestión Empresarial'."</td>
           <td>"."<a href=credencial_ige.php> Descargar Credenciales</a>"."</td>
          </tr>

          <tr>
           <td>".'Ing. Sistemas Computacionales'."</td>
           <td>"."<a href=credencial_sistemas.php> Descargar Credenciales</a>"."</td>
          </tr>

          <tr>
           <td>".'Ing. TICs'."</td>
           <td>"."<a href=credencial_tics.php> Descargar Credenciales</a>"."</td>
          </tr>

          <tr>
           <td>".'Ing. Materiales'."</td>
           <td>"."<a href=credencial_materiales.php> Descargar Credenciales</a>"."</td>
          </tr>

          <tr>
           <td>".'Ing. Mecánica'."</td>
           <td>"."<a href=credencial_mecanica.php> Descargar Credenciales</a>"."</td>
          </tr>

          <tr>
           <td>".'Ing. Mecatrónica'."</td>
           <td>"."<a href=credencial_mecatronica.php> Descargar Credenciales</a>"."</td>
          </tr>

          <tr>
           <td>".'Lic. en Administración'."</td>
           <td>"."<a href=credencial_administracion.php> Descargar Credenciales</a>"."</td>
          </tr>

          <tr>
           <td>".'Contador Público'."</td>
           <td>"."<a href=credencial_contador.php> Descargar Credenciales</a>"."</td>
          </tr>";

    echo "</tbody>
    </table>";
?>
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
  <script>
    $(document).ready(function(){
      // Initialize collapse button
      $('.button-collapse').sideNav({
          menuWidth: 300, // Default is 300
          closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
          draggable: true // Choose whether you can drag to open on touch screens
        }
      );
      // Initialize collapsible (uncomment the line below if you use the dropdown variation)
      $('.collapsible').collapsible();
      $('.dropdown-button').dropdown({
          constrainWidth: false, // Does not change width of dropdown to that of the activator
          hover: true, // Activate on ohver
          belowOrigin: true, // Displays dropdown below the button
          alignment: 'left', // Displays dropdown with edge aligned to the left of button
        }
      );
    });
    
  </script>


</body>
</html>