<?php
require_once "AcoesVideos";
class Video implements AcoesVideos
{
  private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

  public function __construct($titulo)
  {
    $this->titulo = $titulo;
    $this->avaliacao = 1;
    $this->views = 0;
    $this->curtidas = 0;
    $this->reproduzindo = false;
  }
  public function play()
  {
    $this->reproduzindo = true;
  }

  public function pause()
  {
    $this->reproduzindo = false;
  }

  public function like()
  {
    $this->curtidas++;
  }


  public function getTitulo()
  {
    return $this->titulo;
  }


  public function setTitulo($titulo): self
  {
    $this->titulo = $titulo;
    return $this;
  }


  public function getAvaliacao()
  {
    return $this->avaliacao;
  }


  public function setAvaliacao($avaliacao): self
  {
    $media = ($this->avaliacao + $avaliacao) / $this->views;
    $this->avaliacao = $avaliacao;
    return $this;
  }


  public function getViews()
  {
    return $this->views;
  }


  public function setViews($views): self
  {
    $this->views = $views;
    return $this;
  }


  public function getCurtidas()
  {
    return $this->curtidas;
  }


  public function setCurtidas($curtidas): self
  {
    $this->curtidas = $curtidas;
    return $this;
  }


  public function getReproduzindo()
  {
    return $this->reproduzindo;
  }


  public function setReproduzindo($reproduzindo): self
  {
    $this->reproduzindo = $reproduzindo;
    return $this;
  }
}