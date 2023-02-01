<?php

abstract class Pessoa
{
  public $idade;
  public $nome;
  public $sexo;

  public function fazerAniversario()
  {
    $this->idade++;
  }

  function getIdade()
  {
    return $this->idade;
  }
  function setIdade($idade)
  {
    $this->idade = $idade;
  }
  function getNome()
  {
    return $this->nome;
  }
  function setNome($nome)
  {
    $this->nome = $nome;
  }
  function getSexo()
  {
    return $this->sexo;
  }
  function setSexo($sexo)
  {
    $this->sexo = $sexo;
  }
}