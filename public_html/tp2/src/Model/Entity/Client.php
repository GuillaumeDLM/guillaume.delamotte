<?php

namespace Rediite\Model\Entity;

class Client {

    /**
     * @var int
     */
  private $nClient;

    /**
     * @var string
     */
  private $nomClient;

    /**
     * @var string
     */
  private $prenomClient;

    /**
     * @var float
     */
  private $debitClient;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->nClient;
    }

    /**
     * @param mixed $id
     * @return User
     */
    public function setId($id)
    {
        $this->nClient = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * @param mixed $login
     * @return User
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    /**
     * @param mixed $login
     * @return User
     */
    public function setPrenomClient($prenomClient)
    {
        $this->prenomClient = $prenomClient;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDebitClient()
    {
        return $this->debitClient;
    }

    /**
     * @param mixed $debit
     * @return User
     */
    public function setDebitClient($debitClient)
    {
        $this->debitClient = $debitClient;
        return $this;
    }

}
