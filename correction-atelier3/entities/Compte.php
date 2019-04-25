<?php


class Compte
{
 protected $numCompte;
 protected $solde;
 protected $type;

    /**
     * Compte constructor.
     * @param $numCompte
     * @param $solde
     * @param $type
     */
    public function __construct($numCompte, $solde, $type)
    {
        $this->numCompte = $numCompte;
        $this->solde = $solde;
        $this->type = $type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }


    public function setNumCompte($numCompte)
    {
        $this->numCompte = $numCompte;
    }

    /**
     * @param mixed $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * @return mixed
     */
    public function getNumCompte()
    {
        return $this->numCompte;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

}