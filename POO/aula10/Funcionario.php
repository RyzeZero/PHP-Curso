<?php

class Funcionario extends Pessoa
{
  private $setor;
  private $trabalhando;

  public function mudarTrabalho()
  {
    //$this->trabalhando = !$this->trabalhando;
    if ($this->trabalhando = false) {
      echo "mudar de trabalho";
    } else {
      echo "Empregado";
    }
  }
  public function __construct($setor, $trabalhando)
  {
    $this->setor = $setor;
    $this->trabalhando = $trabalhando;
  }

  public function getSetor()
  {
    return $this->setor;
  }


  public function setSetor($setor)
  {
    $this->setor = $setor;
  }


  public function getTrabalhando()
  {
    return $this->trabalhando;
  }


  public function setTrabalhando($trabalhando)
  {
    $this->trabalhando = $trabalhando;
  }
}