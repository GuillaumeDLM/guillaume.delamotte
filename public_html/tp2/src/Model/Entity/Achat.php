<?php

namespace Rediite\Model\Entity;

class Achat {

  /**
   * @var int
   */
  private $nAchat;

  /**
   * @var double
   */
  private $montantAchat;

  /**
   * @var \DateTime
   */
  private $dateAchat;

  /**
   * @var int
   */
  private $client;


  public function getId() 
  {
    return $this->nAchat;
  }

  public function setId(int $num)
  {
    $this->nAchat = $num;
    return $this;
  }

  public function getMontant()
  {
    return $this->montantAchat;
  }

  public function setMontant($montant)
  {
    $this->montantAchat = $montant;
    return $this;
  }


  public function getDate()
  {
    return $this->dateAchat;
  }

  public function setDate($date) 
  {
    $this->dateAchat = $date;
    return $this;
  }


  public function getClient()
  {
    return $this->client;
  }

  public function setClient($client)
  {
    $this->client = $client;
    return $this;
  }


}
