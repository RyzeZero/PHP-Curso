<?php
require_once 'Animal.php';

class Reptil extends Animal
{
  private $corEscamas;
  public function locomover()
  {
    echo "<p>Rastejando</p>";
  }
  public function alimentar()
  {
    echo "<p>Comendo vegetais</p>";
  }
  public function emitirSom()
  {
    echo "<p>Som de Réptil</p>";
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