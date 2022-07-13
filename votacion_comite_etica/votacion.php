<html>
    <header>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    </header>

<?php
// header("Location: ../tabla.php");
session_start();
include('conn.php');
$usuario = $_SESSION['usr'];

$consulta = "SELECT * FROM trabajadores WHERE usr_plataforma = '$usuario'";
$proceso=$conn->query($consulta);
$row=$proceso->fetch_array();

$usr = $row['id'];
$voto1 = $_POST['voto1'];
$voto2 = $_POST['voto2'];
$voto3 = $_POST['voto3'];
$voto4 = $_POST['voto4'];
$flag = 1;

// function generarCodigo($longitud) {
//     $key = '';
//     $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
//     $max = strlen($pattern)-1;
//     for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
//     return $key;
    
//     }   
    
// $codigo = generarCodigo(9); // genera un código de 9 caracteres de longitud.



$sql2="INSERT INTO votos(usr,voto1,voto2,voto3,voto4,flag) 
    VALUES('$usr','$voto1','$voto2','$voto3','$voto4','$flag')";
    $resultado2= $conn->query($sql2) or die ('Error en el query database' .mysqli_error($conn));

$update = "UPDATE trabajadores SET flag = 1 where usr_plataforma='$usuario'";
$resultado3= $conn->query($update) or die ('Error en el query database' .mysqli_error($conn));
    
        echo "<script type=\"text/javascript\">Swal.fire(
        'Voto exitoso',
        'Has realizado tu nominación de manera exitosa',
        'success'
      ).then(function(){window.location='index.php';});</script>";

?>

</html>