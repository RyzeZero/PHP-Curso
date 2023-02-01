<?php
require_once "Aluno.php";

class Bolsista extends Aluno
{
  private $bolsa;

  public function renovarBolsa()
  {
  }
  public function pagarMensalidae()
  {
    echo "$this->nome é Bolsista e pagou a mensalida";
  }
  public function getBolsa()
  {
    return $this->bolsa;
  }
  public function setBolsa($bolsa)
  {
    $this->bolsa = $bolsa;
  }
}