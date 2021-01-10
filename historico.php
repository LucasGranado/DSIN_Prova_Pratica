<?php
session_start();
require_once("lerhistorico.php");
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" type="text/css" href="style/estilo.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cabeleleila leila </title>

  <!-- Bootstrap E Estilos -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/flaticon.css">
  <link rel="stylesheet" href="style/icomoon.css">
  <link rel="stylesheet" href="style/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="style/css/animate.css">
  <link rel="stylesheet" href="style/owl.theme.default.min.css">
  <link rel="stylesheet" href="style/magnific-popup.css">
  <link rel="stylesheet" href="style/aos.css">
  <link rel="stylesheet" href="style/ionicons.min.css">
  <link rel="stylesheet" href="style//bootstrap-datepicker.css">
  <link rel="stylesheet" href="style/jquery.timepicker.css">
  <link rel="stylesheet" href="style/flaticon.css">
  <link rel="stylesheet" href="style/icomoon.css">

  <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
  <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-ligth ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand logonav" href="index.php">Cabeleila Leila</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="historico.php" class="nav-link">Historico</a></li>
          <li class="nav-item"><a href="marcar.php" class="nav-link">Agendar</a></li>
          <li class="nav-item"><a href="sair.php" class="nav-link">Sair</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <table class="table table-hover mt-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Data</th>
        <th scope="col">Descricao</th>
      </tr>
    </thead>
    <tbody>
      <?php
      error_reporting(0);
      foreach ($array as $dados) {  ?>
        <tr>
          <th scope="row"><?= $dados['id'] ?> </th>
          <td><?php ?><?= $dados['nome'] ?></td>
          <td><?php ?><?= $dados['data'] ?></td>
          <td><?php ?><?= $dados['servico'] ?></td>
          <td><?php ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
  </div>
  </div>
  </section>



  <?php
  require_once("footer.html");
  ?>








  <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>