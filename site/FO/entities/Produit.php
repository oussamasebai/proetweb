<?php

class Produit
{

    private $id;
    private $nom;
    private $prix;
    private $image;

    /**
     * Produit constructor.
     * @param $id
     * @param $nom
     * @param $prix
     * @param $image
     */
    public function __construct($id, $nom, $prix, $image)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->image = $image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Produit constructor.
     * @param $id
     * @param $nom
     * @param $prix
     */

}
?>