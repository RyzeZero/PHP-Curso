<?php

require_once "Fighter.php";
class Luta
{

  private $desafiado;

  private $desafiante;
  private $rounds;
  private $aprovada;

  public function marcarLuta($lutador1, $lutador2)
  {

    if ($lutador1->getCategoria() === $lutador2->getCategoria() && ($lutador1 != $lutador2)) {
      $this->aprovada = true;
      $this->desafiado = $lutador1;
      $this->desafiante = $lutador2;
    } else {
      $this->aprovada = false;
      $this->desafiado = null;
      $this->desafiante = null;
    }
  }
  public function Lutar()
  {
    if ($this->aprovada) {
      $this->desafiado->apresentar();
      $this->desafiante->apresentar();
      $vencedor = rand(0, 2);
      switch ($vencedor) {
        case 0:
          echo "</br>Empatou!!!";
          $this->desafiado->empatarLuta();
          $this->desafiante->empatarLuta();
          break;
        case 1:
          echo "<p>" . $this->desafiado->getName() . " O DESAFIADO GAAAAANNNNHHHOOOOUUU!!! </p>";
          $this->desafiado->ganharLuta();
          $this->desafiante->perderLuta();
          break;
        case 2:
          echo "<p>" . $this->desafiante->getName() . " O DESAFIANTE GAAAAANNNNHHHOOOOUUU!!! </p> ";
          $this->desafiante->ganharLuta();
          $this->desafiado->perderLuta();
      }
    } else {
      echo "<p>A Luta não pode acontecer</p>";
    }
  }
  public function getDesafiado()
  {
    return $this->desafiado;
  }
  public function setDesafiado($desafiado)
  {
    $this->desafiado = $desafiado;
    return $this;
  }


  public function getDesafiante()
  {
    return $this->desafiante;
  }

  public function setDesafiante($desafiante)
  {
    $this->desafiante = $desafiante;

    return $this;
  }

  public function getRounds()
  {
    return $this->rounds;
  }

  public function setRounds($rounds)
  {
    $this->rounds = $rounds;
    return $this;
  }

  public function getAprovada()
  {
    return $this->aprovada;
  }

  public function setAprovada($aprovada)
  {
    $this->aprovada = $aprovada;
    return $this;
  }
}