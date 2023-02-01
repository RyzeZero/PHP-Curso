<?php
class Caneca
{
  public $cor;
  public $cheia;
  public $vazia;

  function estaCheia()
  {
    if ($this->cheia == true) {
      echo "<p>esta na hora de tomar um cafe</p>";
    }
  }

  function estaVazia()
  {
    if ($this->vazia == true) {
      echo  "<p>Vou pegar mais cafe</p>";;
    }
  }
}