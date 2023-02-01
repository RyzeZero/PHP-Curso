<?php
require_once 'Animal.php';

class Peixe extends Animal
{
  private $corEscamas;

  public function soltarBolha()
  {
    echo "<p>Bolhas</p>";
  }
  public function locomover()
  {
    echo "<p>Nadando</p>";
  }
  public function alimentar()
  {
    echo "<p>Comendo Substancias</p>";
  }
  public function emitirSom()
  {
    echo "<p>Glup!! glup! glup!</p>";
  }
  public function getCorEscamas()
  {
    return $this->corEscamas;
  }
  public function setCorEscamas($corEscamas)
  {
    $this->corEscamas = $corEscamas;
  }
}