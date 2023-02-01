<?php
class Caneta
{
  private $modelo;
  private $cor;
  private $ponta;

  private $tampada;

  public function __construct($m, $c, $p)
  {
    $this->modelo = $m;
    $this->cor = $c;
    $this->ponta = $p;
    $this->tampar();
  }

  public function tampar()
  {
    $this->tampada = true;
  }
  public function getModelo()
  {
    return $this->modelo;
  }
  public function setModelo($modeloCaneta)
  {
    $this->modelo = $modeloCaneta;
  }

  public function getPonta()
  {
    return $this->ponta;
  }

  public function setPonta($numeroDaPonta)
  {
    $this->ponta = $numeroDaPonta;
  }
}