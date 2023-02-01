<?php

require_once "Pessoa.php";

class Gafanhoto extends Pessoa
{
  private $login, $totalAssistido;

  public function __construct($nome, $idade, $sexo, $login)
  {
    parent::__construct($nome, $idade, $sexo);
    $this->login = $login;
    $this->totalAssistido = 0;
  }
  public function viuMaisUm()
  {
    $this->totalAssistido++;
  }
  public function getLogin()
  {
    return $this->login;
  }

  public function setLogin($login): self
  {
    $this->login = $login;
    return $this;
  }
  public function getTotalAssistido()
  {
    return $this->totalAssistido;
  }

  public function setTotalAssistido($totalAssistido): self
  {
    $this->totalAssistido = $totalAssistido;
    return $this;
  }
}