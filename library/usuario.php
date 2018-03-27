<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap-responsive.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/potencial/style.css"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />


<script>

function cerrarSesion(){
  if(confirm('¿Desea cerrar la sesion?'))
  {
    $.ajax({
        // la URL para la petición
        url : 'cerrarsesion.php',
  
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function() {
          location.href="../index.php";
        }
    });
  }
  else
    return false;
}
</script>


<header id="main-header">

<div class="row-fluid">
<div class="col-lg-4">
  <IMG SRC="/potencial/images/logoULPGC.jpg"  width="300px">
</div>
<br><br><br>
<div class="col-lg-6" id="titulotabla">   
Planificacion Académica
</div>
<div class="col-lg-2" id="titulousuario">
    ¡Hola<a href="#" onclick="verUsuario();">
    <?php
      session_start();
      echo " ".$_SESSION['nombre']."!";
    ?>
    </a>
    <br>
    <a href="/potencial/library/cerrarsesion.php" onclick="cerrarSesion();">Cerrar sesión</a>
</div>
<br><br><br><br>

</header>

  <?php 
  include 'libreria.php';
  $mysqli=conectar();
  $query='SELECT * from user_profile WHERE id='.$_SESSION['id'].'';
  $resultado=lanzar($query, $mysqli);
  $lineaBD = $resultado->fetch_assoc();
  ?>
<br><br><br>
<table>
<tr>
  <td>
     Nombre
  </td>
  <td>
    <?php echo $lineaBD['nombre']?>
  </td>
<tr>
  <td>
    Apellidos 
  </td>
  <td>
    <?php echo $lineaBD['apellido']?>
  </td>
<tr>
  <td>
    Fecha de nacimiento 
  </td>
  <td>  
    <?php 
      $fecha= date_create($lineaBD['birthdate']);
      $fecha=date_format($fecha,"d/m/Y");
      echo $fecha; ?>
  </td>
<tr>
  <td>
    Teléfono
  </td>
  <td>
    <?php echo $lineaBD['phone']?>
  </td>
<tr>
  <td>
    Email 
  </td>
  <td>
    <?php echo $lineaBD['email']?>
  </td>
<tr>
  <td>
    DNI
  </td>
  <td>
    <?php echo $lineaBD['dni']?>
  </td>
<tr>
  <td>  
    Perfil
  </td>
  <td>
      <?php
        if($lineaBD['id_rol']==1){
          echo" Profesor";
          $enlace="/potencial/tablausuario12am.php";
          echo"
            </td>
          <tr>
            <td>
              Categoría profesional
            </td>
            <td>";
            switch($lineaBD['categoria']){
              case '1':
                echo"Catedrático de Universidad";
                break;
              case '2':
                echo"Catedrático de Universidad Vinculado";
                break;
              case '3':
                echo"Titular de Universidad";
                break;
              case '4':
                echo"Catedrático de Escuela Universitaria";
                break;
              case '5':
                echo"Titular de Universidad Vinculado";
                break;
              case '6':
                echo"Titular de Escuela Universitaria";
                break;
              case '7':
                echo"Profesor Contratado Doctor";
                break;
              case '8':
                echo"Profesor Ayudante Doctor";
                break;
              case '9':
                echo"Profesor Colaborador";
                break;
              case '10':
                echo"Ayudante";
                break;
              case '11':
                echo"Asociado a Tiempo Parcial 3 horas";
                break;
              case '12':
                echo"Asociado a Tiempo Parcial 4 horas";
                break;
              case '13':
                echo"Asociado a Tiempo Parcial 5 horas";
                break;
              case '14':
                echo"Asociado a Tiempo Parcial 6 horas";
                break;
              case '15':
                echo"Asociado Ciencias de la Salud 3 horas";
                break;
              case '16':
                echo"Asociado Ciencias de la Salud 4 horas";
                break;
              case '17':
                echo"Asociado Ciencias de la Salud 5 horas";
                break;
              case '18':
                echo"Asociado Ciencias de la Salud 6 horas";
                break;
              default:
                echo"Categoría no asignada, contacte con la administración";
            }

        }
        else{
          echo" Corrector";
          $enlace="/potencial/tablaadmin.php";
        }
    ?>
  </td>

    </tr>
  </table>
  <a href="
  <?php
    echo $enlace;
  ?>
  ">Volver</a>