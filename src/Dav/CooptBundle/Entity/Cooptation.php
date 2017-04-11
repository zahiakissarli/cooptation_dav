<?php

namespace Dav\CooptBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cooptation
 *
 * @ORM\Table(name="cooptation")
 * @ORM\Entity(repositoryClass="Dav\CooptBundle\Repository\CooptationRepository")
 */
class Cooptation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="societe_groupe", type="string", length=255, nullable=true)
     */
    private $societeGroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine_activite", type="string", length=255)
     */
    private $domaineActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="connaissance_coopt", type="string", length=255)
     */
    private $connaissanceCoopt;

    /**
     * @var string
     *
     * @ORM\Column(name="pj_cv", type="text")
     */
    private $pjCv;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Cooptation
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
     * @return Cooptation
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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Cooptation
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cooptation
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set societeGroupe
     *
     * @param string $societeGroupe
     *
     * @return Cooptation
     */
    public function setSocieteGroupe($societeGroupe)
    {
        $this->societeGroupe = $societeGroupe;

        return $this;
    }

    /**
     * Get societeGroupe
     *
     * @return string
     */
    public function getSocieteGroupe()
    {
        return $this->societeGroupe;
    }

    /**
     * Set domaineActivite
     *
     * @param string $domaineActivite
     *
     * @return Cooptation
     */
    public function setDomaineActivite($domaineActivite)
    {
        $this->domaineActivite = $domaineActivite;

        return $this;
    }

    /**
     * Get domaineActivite
     *
     * @return string
     */
    public function getDomaineActivite()
    {
        return $this->domaineActivite;
    }

    /**
     * Set connaissanceCoopt
     *
     * @param string $connaissanceCoopt
     *
     * @return Cooptation
     */
    public function setConnaissanceCoopt($connaissanceCoopt)
    {
        $this->connaissanceCoopt = $connaissanceCoopt;

        return $this;
    }

    /**
     * Get connaissanceCoopt
     *
     * @return string
     */
    public function getConnaissanceCoopt()
    {
        return $this->connaissanceCoopt;
    }

    /**
     * Set pjCv
     *
     * @param string $pjCv
     *
     * @return Cooptation
     */
    public function setPjCv($pjCv)
    {
        $this->pjCv = $pjCv;

        return $this;
    }

    /**
     * Get pjCv
     *
     * @return string
     */
    public function getPjCv()
    {
        return $this->pjCv;
    }
}

