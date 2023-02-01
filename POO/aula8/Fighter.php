<?php

class Fighter
{
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;

  function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
  {
    $this->nome = $nome;
    $this->nacionalidade = $nacionalidade;
    $this->idade = $idade;
    $this->altura = $altura;
    $this->setPeso($peso);
    $this->vitorias = $vitorias;
    $this->derrotas = $derrotas;
    $this->empates = $empates;
  }

  function apresentar()
  {
    echo "</br>Nome: " . $this->getName();
    echo "</br>Nacionalidade: " . $this->getNacionalidade();
    echo "</br>Idade: " . $this->getIdade();
    echo "</br>Altura: " . $this->getAltura();
    echo "</br>Peso: " . $this->getPeso();
    echo "</br>Ganho: " . $this->getVitorias();
    echo "</br>Perdeu: " . $this->getDerrotas();
    echo "</br>Empatou: " . $this->getEmpates();
    echo "</br>";
  }
  function status()
  {
    echo "<p>o lutador " . $this->getName() . " da Categoria " . $this->getCategoria() . "</br>com " . $this->getVitorias() . " Vitorias!!!!, e tem " . $this->getDerrotas() . " Derrotas!!, </br>e esta atualmente com " . $this->getEmpates() . " empates";
  }
  function ganharLuta()
  {
    $this->setVitorias($this->getVitorias() + 1);
  }
  function perderLuta()
  {
    $this->setDerrotas($this->getDerrotas() + 1);
  }
  function empatarLuta()
  {
    $this->setEmpates($this->getEmpates() + 1);
  }


  function getName()
  {
    return $this->nome;
  }
  function setName($nome)
  {
    $this->nome = $nome;
  }
  function getNacionalidade()
  {
    return $this->nacionalidade;
  }
  function setNacionalidade($nacionalidade)
  {
    $this->nacionalidade = $nacionalidade;
  }
  function getIdade()
  {
    return $this->idade;
  }
  function setIdade($idade)
  {
    $this->idade = $idade;
  }
  function getAltura()
  {
    return $this->altura;
  }
  function setAltura($altura)
  {
    $this->altura = $altura;
  }

  function getPeso()
  {
    return $this->peso;
  }
  function setPeso($peso)
  {
    $this->peso = $peso;
    $this->setCategoria();
  }

  public function getCategoria()
  {
    return $this->categoria;
  }
  private function setCategoria()
  {
    if ($this->peso < 52.2) {
      $this->categoria = "invalido";
    } elseif ($this->peso <= 70.3) {
      $this->categoria = "Leve";
    } elseif ($this->peso <= 83.9) {
      $this->categoria = "Médio";
    } elseif ($this->peso <= 120.2) {
      $this->categoria = "Pesado";
    } else {
      $this->categoria = "invalido";
    }
  }
  function getVitorias()
  {
    return $this->vitorias;
  }
  function setVitorias($vitorias)
  {
    $this->vitorias = $vitorias;
  }
  function getDerrotas()
  {
    return $this->derrotas;
  }
  function setDerrotas($derrotas)
  {
    $this->derrotas = $derrotas;
  }
  function getEmpates()
  {
    return $this->empates;
  }
  function setEmpates($empates)
  {
    $this->empates = $empates;
  }
}