<?php
class ContaBanco
{
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  function abrirConta($t)
  {
    $this->setTipo($t);
    $this->setStatus(true);
    if ($t == "CC") {
      $this->setSaldo(50);
    } elseif ($t == "CP") {
      $this->setSaldo(150);
    }
  }

  function fecharConta()
  {
    if ($this->getSaldo() > 0) {
      echo "<p>conta com dinheiro</p>";
    } elseif ($this->getSaldo() < 0) {
      echo "<p>conta em débito</p>";
    } else {
      $this->setStatus(false);
      echo "Conta do(a) " . $this->getDono() . " fechada com sucesso</p>";
    }
  }

  function depositar($v)
  {
    if ($this->getStatus() == true) {
      $this->setSaldo($this->getSaldo() + $v);
      echo "<p>Deposito de R$ $v autorinado na conta do(a) " . $this->getDono() . "</p>";
    } else {
      echo "impossivel depositar";
    }
  }

  function sacar($v)
  {
    if ($this->getStatus() == true) {
      if ($this->getSaldo() >= $v) {
        $this->setSaldo($this->getSaldo() - $v);
        echo "<p>saldo de R$ $v autorinado na conta do(a) " . $this->getDono() . "</p>";
      } else {
        echo "Seu saldo insuficiente.";
      }
    } else {
      echo "Não é possivel sacar.";
    }
  }

  function pagarMensal()
  {
    if ($this->getTipo() == "CC") {
      $v = 12;
    } elseif ($this->getTipo() == "CP") {
      $v = 20;
    }

    if ($this->getStatus() == true) {
      if ($this->getSaldo() > $v) {
        $this->setSaldo($this->getSaldo() - $v);
        echo "<p>Mensaildade de R$ $v débitada na conta do(a) " . $this->getDono() . "</p>";
      } else {
        echo "saldo insufiente.";
      }
    } else {
      echo "impossivel pagar.";
    }
  }

  function __construct()
  {
    $this->setSaldo(0);
    $this->setStatus(false);
    echo "<p>conta criada com sucesso.</p>";
  }

  function getNumConta()
  {
    return $this->numConta;
  }
  function setNumConta($numConta)
  {
    $this->numConta = $numConta;
  }

  function getTipo()
  {
    return $this->tipo;
  }

  function setTipo($tipoConta)
  {
    $this->tipo = $tipoConta;
  }
  function getDono()
  {
    return $this->dono;
  }
  function setDono($donoConta)
  {
    $this->dono = $donoConta;
  }
  function getSaldo()
  {
    return $this->saldo;
  }
  function setSaldo($saldoConta)
  {
    $this->saldo = $saldoConta;
  }
  function getStatus()
  {
    return $this->status;
  }
  function setStatus($statusConta)
  {
    $this->status = $statusConta;
  }
}