<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->

  <meta charset="utf-8">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="sweetalert2.all.min.js"></script>


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="form-validation.css">
<script src="form-validation.js"></script>


</head>

<body>

<script>
Swal.fire(
  '¡Atención!',
  'Tu denuncia será completamente anónima',
  'warning'
)
</script>


<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="img/logo.png" alt="" width="72" height="72">
    <h2>COMITÉ DE ÉTICA</h2>
    <p class="lead">En esta página podrás realizar tu denuncia anónima.</p>
    <hr>
  </div>

  
    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">Redacta tu denuncia lo más detallada posible para atenderla.</h4>
      
      
      <form class="" action="process.php" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Fecha y Hora:</label>
            <input name="fechahora" type="datetime" class="form-control" id="time" placeholder="" value="<?php echo date("Y/m/d H:i:s");?>" readonly>
           
            <div class="invalid-feedback">
              La hora en que se realiza la denuncia.
            </div>
          </div>
        </div>


        

        <div class="mb-12">

          <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text">Texto a redactar</span>
            </div>
            <textarea name="texto" id="texto" class="form-control" aria-label="Texto" rows="18"></textarea>
            </div>


        </div>

        

        
    
        <hr class="mb-4">

        <h4 class="mb-3">Tipo de denuncia</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="tema1" name="tema" type="radio" class="custom-control-input" value="1" required>
            <label class="custom-control-label" for="tema1">Acoso laboral</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="tema2" name="tema" type="radio" class="custom-control-input" value="2" required>
            <label class="custom-control-label" for="tema2">Acoso sexual</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="tema3" name="tema" type="radio" class="custom-control-input" value="3" required>
            <label class="custom-control-label" for="tema3">Amenaza</label>
          </div>
        </div>
        
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit"><i class="fas fa-envelope-open-text"></i> Enviar denuncia</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020 Gobierno del Estado de Zacatecas - INJUVENTUD</p>
    <ul class="list-inline">
      
      <li class="list-inline-item"><a href="#">PDF</a></li>
    </ul>
  </footer>
</div>

</body>
</html>