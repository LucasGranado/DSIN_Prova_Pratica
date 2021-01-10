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
  
<section class="ftco-section contact-section">
  <div class="container mt-5">
    <div class="row block-9">
      <div class="col-md-12">

        <form action="marcarhorario.php" method="post" class="contact-form" required="">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <input name="nome" type="text" class="form-control" placeholder="Seu nome" required="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input name="data" type="date" class="form-control" required="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input name="hora" type="time" class="form-control" required="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <select name="sexo" class="form-control">
                  <option value="1">Feminino</option>
                  <option value="2">Masculino</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="servico" type="text" class="form-control" placeholder="Digite os serviços a marcar">
              </div>
            </div>
            <div class="form-group">
              <input type="submit" value="Cadastrar" class="btn btn-primary py-3 px-5">
            </div>
        </form>
</section>



<?php
require_once("footer.html");
?>