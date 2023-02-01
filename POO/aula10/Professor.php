<?php

class Professor extends Pessoa
{
  private $especialidade;
  private $salario;

  public function receberSalario()
  {
    if ($this->salario >= $this->setSalario($this->getSalario())) {
      echo "<p>O salario atualmente é: " . $this->salario . "</p>";
    } elseif ($this->salario < $this->setSalario($this->getSalario())) {
      echo "<p>O não mudou, o salario atualmente ainda é: " . $this->salario . "</p>";
    }
  }
  public function __construct($especialidade, $salario)
  {
    $this->especialidade = $especialidade;
    $this->salario = $salario;

    echo "<p>salario inicial: " . $this->salario . "</p>";
  }

  function getEspecialidade()
  {
    return $this->especialidade;
  }

  function setEspecialidade($especialidade)
  {
    $this->especialidade = $especialidade;
  }


  public function getSalario()
  {
    return $this->salario;
  }


  public function setSalario($salario)
  {
    $this->salario = $salario;
  }
}