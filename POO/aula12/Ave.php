<?php
require_once 'Animal.php';

class Ave extends Animal
{
  private $corPena;
  public function fazerNinho()
  {
    echo "<p>Criando ninho para descanço</p>";
  }
  public function locomover()
  {
    echo "<p>Voando</p>";
  }
  public function alimentar()
  {
    echo "<p>Comendo insetos</p>";
  }
  public function emitirSom()
  {
    echo "<p>Som de Ave</p>";
  }
  public function getCorPena()
  {
    return $this->corPena;
  }
  public function setCorPena($corPena)
  {
    $this->corPena = $corPena;
  }
}