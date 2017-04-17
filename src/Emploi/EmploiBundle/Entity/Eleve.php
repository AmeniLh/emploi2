<?php

namespace Emploi\EmploiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eleve
 *
 * @ORM\Table(name="eleve")
 * @ORM\Entity(repositoryClass="Emploi\EmploiBundle\Repository\EleveRepository")
 */
class Eleve
{
    /**
     * @var integer $ideleve
     *
     * @ORM\Column(name="ideleve", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $ideleve;

    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=false)
     */
    private $prenom;

    /**
     * @var string $datenais
     *
     * @ORM\Column(name="datenais", type="date",  nullable=false)
     */
    private $datenais;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Get ideleve
     *
     * @return integer
     */
    public function getIdeleve()
    {
        return $this->ideleve;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Eleve
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Eleve
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenais
     *
     * @param \DateTime $datenais
     *
     * @return Eleve
     */
    public function setDatenais($datenais)
    {
        $this->datenais = $datenais;

        return $this;
    }

    /**
     * Get datenais
     *
     * @return \DateTime
     */
    public function getDatenais()
    {
        return $this->datenais;
    }
}
