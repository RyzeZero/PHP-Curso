<?php
interface Publicacao
{
  public function abrir();
  public function fechar();
  public function folhear($p);
  public function avancarPagina();
  public function voltarPagina();
}