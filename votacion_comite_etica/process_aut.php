<!DOCTYPE html>
<html lang="es">
<head>

  <link rel="shortcut icon" href="img/mini_logo_cigo.ico" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
  
<?php

$usuario=$_POST['usr'];
$pwd=$_POST['pwd'];

include('conn.php');

$query="SELECT * FROM trabajadores WHERE usr_plataforma='$usuario' AND pwd='$pwd'";
$proceso=$conn->query($query);

if ($resultado=mysqli_fetch_array($proceso)){

  session_start();
    $_SESSION['usr']=$usuario;
    // $_SESSION['codigo']=$resultado['codigo'];
    $_SESSION['tipo_trabajador']=$resultado['tipo_trabajador'];
    // $_SESSION['tematica']=$resultado['tematica'];

    
      // if($resultado['permiso']==1){
        //usuario ponencia escrita
        echo "<script type=\"text/javascript\">location.href='index.php';</script>";
        
      // }
        
      // elseif($resultado['permiso']==2){
      //   //usuario ponencia oral
      //   echo "<script type=\"text/javascript\">location.href='../cigo/usr_oral/';</script>";
        
      // }

      // elseif($resultado['permiso']==3){

      //   //mesa
      //   echo "<script type=\"text/javascript\">location.href='../cigo/mesa/';</script>";

      
      // }

      // elseif($resultado['permiso']==4){

      //   echo "<script type=\"text/javascript\">location.href='../cigo/admin/';</script>";
      
      // }
    

}
    
    else{
      
      echo "<script type=\"text/javascript\">alert('Usuario no válido');location.href=history.go(-1);</script>";

    }
     
?>

</body>

</html>