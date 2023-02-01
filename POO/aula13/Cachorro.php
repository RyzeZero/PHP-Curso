<?php

require_once 'Lobo.php';
class Cachorro extends Lobo
{
  protected $corPelo;

  public function reagirFrase($frase)
  {
    if ($frase = "toma comida" || $frase = "ola") {
      echo "abanar e latir";
    } else {
      echo "rosnar";
    }
  }
  public function reagirHora($hora, $min)
  {
    if ($hora < 12) {
      echo "Abanar";
    } elseif ($hora >= 18) {
      echo "ignorar";
    } else {
      echo "rosnar";
    }
  }
  public function reagirDono($dono)
  {
    if ($dono = true) {
      echo "Abanar";
    } else {
      echo "rosnar";
    }
  }

  public function reagirIdade($idade, $peso)
  {
    if ($idade < 5) {
      if ($peso < 10) {
        echo "Abanar";
      } else {
        echo "Latir";
      }
    } else {
      if ($peso < 10) {
        echo "Rosnar";
      } else {
        echo "Ignorar";
      }
    }
  }
  public function emitirSom()
  {
    echo "Au!Au!Au!";
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