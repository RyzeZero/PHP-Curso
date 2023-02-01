<?php
require_once "publicacao.php";
require_once "pessoa.php";
class Livro implements Publicacao
{
  private $titulo;
  private $autor;
  private $totalPaginas;
  private $paginaAtual;
  private $aberto;

  private $leitor;

  public function detalhes()
  {
  }

  function __construct($titulo, $autor, $totalPaginas, $leitor)
  {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->totalPaginas = $totalPaginas;
    $this->aberto = false;
    $this->paginaAtual = 0;
    $this->leitor = $leitor;
  }
  public function abrir()
  {
    $this->aberto = true;
  }
  public function fechar()
  {
    $this->aberto = true;
  }
  public function folhear($p)
  {
    if ($p > $this->totalPaginas) {
      $this->paginaAtual = 0;
    } else {
      $this->paginaAtual = $p;
    }
  }
  public function avancarPagina()
  {
    $this->paginaAtual++;
  }
  public function voltarPagina()
  {
    $this->paginaAtual--;
  }
  public function getAberto()
  {
    return $this->aberto;
  }

  public function setAberto($aberto)
  {
    $this->aberto = $aberto;
  }


  public function getTitulo()
  {
    return $this->titulo;
  }


  public function setTitulo($titulo)
  {
    $this->titulo = $titulo;
  }


  public function getAutor()
  {
    return $this->autor;
  }


  public function setAutor($autor)
  {
    $this->autor = $autor;
  }

  public function getTotalPaginas()
  {
    return $this->totalPaginas;
  }


  public function setTotalPaginas($totalPaginas)
  {
  }


  public function getPaginaAtual()
  {
    return $this->paginaAtual;
  }

  public function setPaginaAtual($paginaAtual)
  {
    $this->paginaAtual = $paginaAtual;
  }

  public function getLeitor()
  {
    return $this->leitor;
  }

  public function setLeitor($leitor)
  {
    $this->leitor = $leitor;
  }
}