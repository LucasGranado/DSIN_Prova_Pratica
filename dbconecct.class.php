<?php
class db
{
  private $host    =  'localhost';
  private $usuario =  'root';
  private $senha   =  '';
  private $bancodedados   =  'salao';


  public function conectar_banco()
  {
    $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->bancodedados);
    mysqli_set_charset($con, 'utf8');

    if (mysqli_connect_errno()) {
      echo 'Não foi possivel se conectar ao banco de dados' . mysqli_connect_error();
    }
    return $con;
  }
}
