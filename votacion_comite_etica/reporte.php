<?php
session_start();

if (isset($_SESSION['usr'])) {
    // if($_SESSION['tipo_trabajador']==3){
    if($_SESSION['usr']=="usr32"){


        // header('Location: javascript: history.go(-1)');
    }
    // elseif($_SESSION['tipo_trabajador']==2){
    //     // header('Location: javascript: history.go(-1)');
    // }
    // elseif($_SESSION['tipo_trabajador']==3){
    //     // header('Location: javascript: history.go(-1)');
    // }
    else{
        header('Location:sort.php');
    }
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    // echo 'Hola ' . $_SESSION['usr'];
} else {
    // En caso contrario redirigimos el visitante a otra página

    echo 'Usuario no válido';
    // header('Location: ../../autentificacion/');
    header('Location: sort.php');
    die();
}
?>

<!doctype html>
<html lang="es">
  <head>
  <?php
include ("conn.php")
?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Comité de Ética</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg> -->
      <img src="TrabajemosJuntosJuventud.png" alt="" width="36" height="36" class="img-thumbnail" style="margin-right:9px"><strong> INJUVENTUD</strong>
      </a>

      <?php
      echo $_SESSION['usr'];
      ?>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation"> -->
        <!-- <span class="navbar-toggler-icon"></span> -->
      <!-- </button> -->
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Instituto de la Juventud</h1>
      <p><img src="TrabajemosJuntosJuventud.png" alt="" width="81" height="81"></p>
      <p class="lead text-muted">Comité de ética | Sistema de nominación</p>
      <p>
        <a href="index.php" class="btn btn-secondary my-2">Regresar</a>
        <a href="sort.php" class="btn btn-primary my-2">Salir</a>
        
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
        <p class="lead text-muted">Reporte de votaciones del Comité de Ética</p>
        <p class="lead text-muted small">Enlace Jefe de Departamento</p>
        
        <?php
          // session_start();
          $usuario = $_SESSION['usr'];

          // $query="SELECT * FROM trabajadores WHERE tipo_trabajador=1";
          // $resultado = $conn->query($query);
          // $row=$resultado->fetch_assoc();
        ?>

        <?php
          // $query2="SELECT * FROM trabajadores WHERE tipo_trabajador=2";
          // $resultado2 = $conn->query($query2);
          // $row=$resultado->fetch_assoc();
        ?>

        <?php
          // $query3="SELECT * FROM votacion";
          $query1="SELECT COUNT(voto1) as voto,voto1 as worker FROM votos GROUP BY voto1 ORDER BY voto desc";
          $resultado1 = $conn->query($query1);

          $query2="SELECT COUNT(voto2) as voto2,voto2 as worker2 FROM votos GROUP BY voto2 ORDER BY voto2 desc";
          $resultado2 = $conn->query($query2);
          
          $query3="SELECT COUNT(voto3) as voto3,voto3 as worker3 FROM votos GROUP BY voto3 ORDER BY voto3 desc";
          $resultado3 = $conn->query($query3);

          $query4="SELECT COUNT(voto4) as voto4,voto4 as worker4 FROM votos GROUP BY voto4 ORDER BY voto4 desc";
          $resultado4 = $conn->query($query4);
          // $row=$resultado->fetch_assoc();
        ?>

        <table class="table table-hover table-bordered table-responsive">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Puesto</th>
              <th scope="col">Departamento</th>
              <!-- <th scope="col">Puesto</th> -->
              <th scope="col">Votación</th>
            </tr>
          </thead>
          <tbody>
            
          

          <!-- <tr> -->
          <!-- <th scope="row">1</th> -->
          <?php
            $i1 = 0;
            while($row1=$resultado1->fetch_array()){
            // while($row1=$resultado1->mysqli_result()){
              // $voto1=$row1;
              // echo $voto1;
              $i1++;

              $votacionresultado1 = $row1[1];
              $consulta = "SELECT * FROM trabajadores WHERE id='$votacionresultado1' ";
              $consultaterminada = $conn->query($consulta);
              $cons = $consultaterminada->fetch_array();
              
              echo'<tr>';
              echo'<td>'.$i1.'</td>';
              echo '<td>'.$cons['trabajador'].'</td>';
              echo '<td>'.$cons['puesto'].'</td>';
              echo '<td>'.$cons['departamento'].'</td>';
              // echo '<td>'.$row1[1].'</td>';
              
              echo '<td><center>'.$row1[0].'</center></td>';
              // <option value="'.$row1['Votos'].'">'.$row1['Trabajador'].'</option>';
              // }
              // echo '';
              echo'</tr>';
            }
          ?>
              
              <!-- <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td> -->
            <!-- </tr> -->

            
          </tbody>
        </table>


      <hr>

      <p class="lead text-muted small">Vocal Jefe de Departamento</p>

      <table class="table table-hover table-bordered table-responsive">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Puesto</th>
              <th scope="col">Departamento</th>
              <!-- <th scope="col">Puesto</th> -->
              <th scope="col">Votación</th>
            </tr>
          </thead>
          <tbody>
            
          

          <tr>
          <!-- <th scope="row">1</th> -->
          <?php
            $i2 = 0;
            while($row2=$resultado2->fetch_array()){
            // while($row1=$resultado1->mysqli_result()){
              // $voto1=$row1;
              // echo $voto1;
              $i2++;

              $votacionresultado2 = $row2[1];
              $consulta2 = "SELECT * FROM trabajadores WHERE id='$votacionresultado2' ";
              $consultaterminada2 = $conn->query($consulta2);
              $cons2 = $consultaterminada2->fetch_array();

              echo'<td>'.$i2.'</td>';
              echo '<td>'.$cons2['trabajador'].'</td>';
              echo '<td>'.$cons2['puesto'].'</td>';
              echo '<td>'.$cons2['departamento'].'</td>';
              // echo '<td>'.$row1[1].'</td>';
              
              echo '<td><center>'.$row2[0].'</center></td>';
              // <option value="'.$row1['Votos'].'">'.$row1['Trabajador'].'</option>';
              // }
              // echo '';
              echo'</tr>';
            }
          ?>
              
              <!-- <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td> -->
            <!-- </tr> -->

            
          </tbody>
        </table>
        
        <hr>
        <p class="lead text-muted small">Enlace Analista/Técnico de Departamento</p>

      <table class="table table-hover table-bordered table-responsive">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Puesto</th>
              <th scope="col">Departamento</th>
              <!-- <th scope="col">Puesto</th> -->
              <th scope="col">Votación</th>
            </tr>
          </thead>
          <tbody>
            
          

          <tr>
          <!-- <th scope="row">1</th> -->
          <?php
             $i3 = 0;
            while($row3=$resultado3->fetch_array()){
            // while($row1=$resultado1->mysqli_result()){
              // $voto1=$row1;
              // echo $voto1;
              $i3++;

              $votacionresultado3 = $row3[1];
              $consulta3 = "SELECT * FROM trabajadores WHERE id='$votacionresultado3' ";
              $consultaterminada3 = $conn->query($consulta3);
              $cons3 = $consultaterminada3->fetch_array();

              echo'<td>'.$i3.'</td>';
              echo '<td>'.$cons3['trabajador'].'</td>';
              echo '<td>'.$cons3['puesto'].'</td>';
              echo '<td>'.$cons3['departamento'].'</td>';
              // echo '<td>'.$row1[1].'</td>';
              
              echo '<td><center>'.$row3[0].'</center></td>';
              // <option value="'.$row1['Votos'].'">'.$row1['Trabajador'].'</option>';
              // }
              // echo '';
              echo'</tr>';
            }
          ?>
              
              <!-- <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td> -->
            <!-- </tr> -->

            
          </tbody>
        </table>

        <hr>
        <p class="lead text-muted small">Vocal Analista/Técnico de Departamento</p>

      <table class="table table-hover table-bordered table-responsive">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Puesto</th>
              <th scope="col">Departamento</th>
              <!-- <th scope="col">Puesto</th> -->
              <th scope="col">Votación</th>
            </tr>
          </thead>
          <tbody>
            
          

          <tr>
          <!-- <th scope="row">1</th> -->
          <?php
            $i4 = 0;
            while($row4=$resultado4->fetch_array()){
            // while($row1=$resultado1->mysqli_result()){
              // $voto1=$row1;
              // echo $voto1;
              $i4++;

              $votacionresultado4 = $row4[1];
              $consulta4 = "SELECT * FROM trabajadores WHERE id='$votacionresultado4' ";
              $consultaterminada4 = $conn->query($consulta4);
              $cons4 = $consultaterminada4->fetch_array();

              echo'<td>'.$i4.'</td>';
              echo '<td>'.$cons4['trabajador'].'</td>';
              echo '<td>'.$cons4['puesto'].'</td>';
              echo '<td>'.$cons4['departamento'].'</td>';
              // echo '<td>'.$row1[1].'</td>';
              
              echo '<td><center>'.$row4[0].'</center></td>';
              // <option value="'.$row1['Votos'].'">'.$row1['Trabajador'].'</option>';
              // }
              // echo '';
              echo'</tr>';
            }
          ?>
              
              <!-- <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td> -->
            <!-- </tr> -->

            
          </tbody>
        </table>

      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Arriba</a>
    </p>
    <p>Sistema de votación</p>
    <p>Comité de Ética | INJUVENTUD</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
</html>
