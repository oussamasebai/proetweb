<?php
/**
 * Created by PhpStorm.
 * User: OUSSAMA
 * Date: 05/04/2019
 * Time: 14:37
 */
include "Compte.php";
class CompteEparne extends Compte
{
  private $tauxinteret;

    /**
     * CompteEparne constructor.
     * @param $tauxinteret
     */
    function __construct($numCompte,$solde,$type,$tauxinteret)
    {
        parent::__construct($numCompte,$solde,$type);
        $this->tauxinteret = $tauxinteret;
    }


    /**
     * @param mixed $numCompte
     */
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
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $tauxinteret
     */
    public function setTauxinteret($tauxinteret)
    {
        $this->tauxinteret = $tauxinteret;
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

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getTauxinteret()
    {
        return $this->tauxinteret;
    }

}