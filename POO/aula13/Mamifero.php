<?php

require_once 'Animal.php';
class Mamifero extends Animal
{
  protected $corPelo;

  public function emitirSom()
  {
    echo "som de Mamifero";
  }

  public function getCorPelo()
  {
    return $this->corPelo;
  }
  public function setCorPelo($corPelo)
  {
    $this->corPelo = $corPelo;
    return $this;
  }
}