<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" type="text/css" href="style/estilo.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cabeleleila leila </title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

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
          <li class="nav-item"><a href="./sobrenos.html" class="nav-link">Sobre nós</a></li>
          <li class="nav-item"><a href="./servicos.html" class="nav-link">Serviços</a></li>
          <li class="nav-item"><a href="./cadastrar.html" class="nav-link">Cadastrar</a></li>
          <li class="nav-item"><a href="./login.html" class="nav-link">Entrar</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->


  <section class="ftco-section contact-section">
    <div class="container">

      <div class="card cardlogin" style="width: 18rem;">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 ">
              <form action="validalogin.php" method="post" class="contact-form">

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control" placeholder="E-mail">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input name="senha" type="password" class="form-control" placeholder="Sua senha">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="submit" value="Entrar" class="btn btn-primary py-3 px-5">
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <?php
  require_once("footer.html");
  ?>