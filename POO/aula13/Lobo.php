<?php

require_once 'Mamifero.php';
class Lobo extends Mamifero
{
  protected $corPelo;

  public function emitirSom()
  {
    echo "AUUUUUUUUUUUU!!";
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