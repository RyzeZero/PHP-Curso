<?php
require_once "Gafanhoto.php";
require_once "Video.php";
class Visualizacao
{
  private $espectador, $filme;

  public function __construct($espectador, $filme)
  {
    $this->espectador = $espectador;
    $this->filme = $filme;
    $this->filme->setViews($this->filme->getViews() + 1);
    $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
  }
  public function getEspectador()
  {
    return $this->espectador;
  }

  public function avaliar()
  {
    $this->filme->setAvaliacao(5);
  }
  public function avaliarNota($nota)
  {
    $this->filme->setAvaliacao(7);
  }
  public function avaliarPorc($porc)
  {
    $nova = 0;
    if ($porc <= 20) {
      $nova = 3;
    } elseif ($porc <= 50) {
      $nova = 5;
    } elseif ($porc <= 90) {
      $nova = 8;
    } else {
      $nova = 10;
    }
    $this->filme->setAvaliacao($nova);
  }

  public function setEspectador($espectador): self
  {
    $this->espectador = $espectador;
    return $this;
  }

  public function getFilme()
  {
    return $this->filme;
  }
  public function setFilme($filme): self
  {
    $this->filme = $filme;
    return $this;
  }
}