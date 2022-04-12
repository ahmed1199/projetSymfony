<?php

namespace App\Entity;

use App\Entity\Utilisateur as EntityUtilisateur;
use Doctrine\ORM\Mapping as ORM;
use Proxies\__CG__\App\Entity\Utilisateur;

/**
 * Publication
 *
 * @ORM\Table(name="publication", indexes={@ORM\Index(name="fk_pub", columns={"id_utilisateur"})})
 * @ORM\Entity
 */
class Publication
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contenue", type="string", length=255, nullable=false)
     */
    private $contenue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbr_reaction", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $nbrReaction = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file", type="string", nullable=true, options={"default"="NULL"})
     */
    private $file = 'NULL';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

   
    

    /**
     * Get the value of contenue
     *
     * @return  string
     */ 
    public function getContenue()
    {
        return $this->contenue;
    }

    /**
     * Set the value of contenue
     *
     * @param  string  $contenue
     *
     * @return  self
     */ 
    public function setContenue(string $contenue)
    {
        $this->contenue = $contenue;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of createdAt
     *
     * @return  \DateTime
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @param  \DateTime  $createdAt
     *
     * @return  self
     */ 
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of nbrReaction
     *
     * @return  int|null
     */ 
    public function getNbrReaction()
    {
        return $this->nbrReaction;
    }

    /**
     * Set the value of nbrReaction
     *
     * @param  int|null  $nbrReaction
     *
     * @return  self
     */ 
    public function setNbrReaction($nbrReaction)
    {
        $this->nbrReaction = $nbrReaction;

        return $this;
    }

    /**
     * Get the value of file
     *
     * @return  string|null
     */ 
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set the value of file
     *
     * @param  string|null  $file
     *
     * @return  self
     */ 
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get the value of idUtilisateur
     *
     * @return  \Utilisateur
     */ 
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set the value of idUtilisateur
     *
     * @param  \Utilisateur  $idUtilisateur
     *
     * @return  self
     */ 
    public function setIdUtilisateur(int $idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString() {
    	return "Id: {$this->id}";
    }
}
