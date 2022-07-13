<!DOCTYPE html>
   <html>
    
    <head>
       <meta charset="utf-8">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    </head>
<body>

<?php   
include("conexion.php");

$fechahora = $_POST['fechahora'];
$tema = $_POST['tema'];
$texto = $_POST['texto'];


$sql= "INSERT INTO comite(fechahora,tema,texto)VALUES ('$fechahora','$tema','$texto')";
$resultado= $conn->query($sql);

if($resultado){
	//header("Location: 03_listado_registros.php");
    //echo "<script type type=\"text/javascript\">alert('Dictamen exitoso');location.href='03_listado_registros.php';</script>";
    echo "<script type=\"text/javascript\">Swal.fire('Tu denuncia se ha enviado exitosamente').then(function(){window.location='index.php';});</script>";
    
}
else{
	echo "Inserción no exitosa";
	}

?>

</body>

</html>