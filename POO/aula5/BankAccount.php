<?php
class bankAccount
{
  public $accountNumber;
  protected $accountType;
  private $owner;
  public $balance;
  public $status;

  private $contaCorrente;
  private $contaPoupanca;

  public function __construct()
  {

    $this->balance = 0;
    $this->status = false;
  }
  function openBankAccount($t)
  {
    $this->setAccountType($t);
    $this->setStatus(true);

    require_once 'aula-5.php';

    if ($t == $this->contaCorrente) {
      $this->contaPoupanca = null;
      $this->balance = 50;
    } elseif ($t == $this->contaPoupanca) {
      $this->balance = 150;
      $this->contaCorrente = null;
    } elseif ($t == $this->contaCorrente && $t == $this->contaPoupanca) {
      $this->contaPoupanca;
      $this->contaCorrente;
      $this->balance = 200;
    }
  }

  function closeBankAccount()
  {
    if ($this->balance > 0) {
      echo "A conta ainda possui dinheiro, retire todo o saldo antes.";
    } elseif ($this->balance < 0) {
      echo "conta em débito";
    } else {
      $this->setStatus(false);
    }
  }

  function depositeCash($cashValue)
  {
    $this->setBalance($this->getBalance() + $cashValue);
  }

  function withdrawCash($withdrawValue)
  {
    if ($this->getStatus() == true) {
      if ($this->getBalance() >= $withdrawValue) {
        $this->setBalance($this->getBalance() + $withdrawValue);
      } else {
        echo "saldo insuficiente";
      }
    } else {
      echo "impossivel sacar no momento";
    }
  }

  function payMonth()
  {
    $value = 0;
    if ($this->getAccountType() == $this->contaCorrente) {
      $value = 12;
    } elseif ($this->getAccountType() == $this->contaPoupanca) {
      $value = 20;
    }

    if ($this->getStatus() == true) {
      if ($this->getBalance() > $value) {
        $this->setBalance($this->getBalance() - $value);
      } else {
        echo "saldo insuficiente";
      }
    } else {
      echo "Impossivel pagar";
    }
  }

  function getAccountNumber()
  {
    return $this->accountNumber;
  }
  function setAccountNumber($accountNumberUser)
  {
    $this->accountNumber = $accountNumberUser;
  }

  function getAccountType()
  {
    return $this->accountType;
  }
  function setAccountType($accountTypeUser)
  {
    $this->accountType = $accountTypeUser;
  }

  function getOwner()
  {
    return $this->owner;
  }
  function setOwner($ownerUser)
  {
    $this->owner = $ownerUser;
  }

  function getBalance()
  {
    return $this->balance;
  }
  function setBalance($balanceUser)
  {
    $this->balance = $balanceUser;
  }
  function getStatus()
  {
    return $this->status;
  }

  function setStatus($statusUser)
  {
    $this->status = $statusUser;
  }
}