<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="../formulariogrupo.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <style type="text/css">
    .bg1 { background:#088A68; color:#FFF; }
    </style>
    <script type="text/javascript">
      $(document).ready(function(){
      $('select').material_select();
      });
    </script>
  <title>Carga Administración</title>
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
  </br></br>
  <div class="container">
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
             <td>"."<a href=carga_bioquimica.php> Descargar carga</a>"."</td>
            </tr>

            <tr>
             <td>".'Ing. Eléctrica'."</td>
             <td>"."<a href=carga_electrica.php> Descargar carga</a>"."</td>
            </tr>

            <tr>
             <td>".'Ing. Electrónica'."</td>
             <td>"."<a href=carga_electronica.php> Descargar carga</a>"."</td>
            </tr>

            <tr>
             <td>".'Ing. en Gestión Empresarial'."</td>
             <td>"."<a href=carga_ige.php> Descargar carga</a>"."</td>
            </tr>

            <tr>
             <td>".'Ing. Sistemas Computacionales'."</td>
             <td>"."<a href=carga_sistemas.php> Descargar carga</a>"."</td>
            </tr>

            <tr>
             <td>".'Ing. TICs'."</td>
             <td>"."<a href=carga_tics.php> Descargar carga</a>"."</td>
            </tr>

            <tr>
             <td>".'Ing. Materiales'."</td>
             <td>"."<a href=carga_materiales.php> Descargar carga</a>"."</td>
            </tr>

            <tr>
             <td>".'Ing. Mecánica'."</td>
             <td>"."<a href=carga_mecanica.php> Descargar carga</a>"."</td>
            </tr>

            <tr>
             <td>".'Ing. Mecatrónica'."</td>
             <td>"."<a href=carga_mecatronica.php> Descargar carga</a>"."</td>
            </tr>

            <tr>
             <td>".'Lic. en Administración'."</td>
             <td>"."<a href=carga_administracion.php> Descargar carga</a>"."</td>
            </tr>

            <tr>
             <td>".'Contador Público'."</td>
             <td>"."<a href=carga_contador.php> Descargar carga</a>"."</td>
            </tr>";

      echo "</tbody>
      </table>";
?>
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
    <?php
        include('../ScriptMenu.html');
      ?>

</body>
</html>