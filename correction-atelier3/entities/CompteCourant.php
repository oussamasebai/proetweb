<?php
/**
 * Created by PhpStorm.
 * User: OUSSAMA
 * Date: 05/04/2019
 * Time: 14:40
 */
include "Compte.php";

class CompteCourant extends Compte
{
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

}