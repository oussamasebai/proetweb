<?php
/**
 * Created by PhpStorm.
 * User: OUSSAMA
 * Date: 12/04/2019
 * Time: 14:17
 */

class competition
{
  private $nom;
  private $nom_c_s;
  private $heure;
  private $date;
  private $cout;
  private $type;

    /**
     * competition constructor.
     * @param $nom
     * @param $nom_c_s
     * @param $heure
     * @param $date
     * @param $cout
     * @param $type
     */
    public function __construct($nom, $nom_c_s, $heure, $date, $cout, $type)
    {
        $this->nom = $nom;
        $this->nom_c_s = $nom_c_s;
        $this->heure = $heure;
        $this->date = $date;
        $this->cout = $cout;
        $this->type = $type;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $nom_c_s
     */
    public function setNom_c_s($nom_c_s)
    {
        $this->nom_c_s = $nom_c_s;
    }

    /**
     * @param mixed $heure
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param mixed $cout
     */
    public function setCout($cout)
    {
        $this->cout = $cout;
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getNom_c_s()
    {
        return $this->nom_c_s;
    }

    /**
     * @return mixed
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}