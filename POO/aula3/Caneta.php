<?php
class Caneta
{

  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;

  function rabiscar()
  {
    if ($this->tampada == true) {
      echo "Não é possivel, pois caneta está tampada";
    } else {
      echo "Estou rabiscando....";
    }
  }

  function tampar()
  {
    $this->tampada = true;
  }

  function destampar()
  {
    $this->tampada = false;
  }
}