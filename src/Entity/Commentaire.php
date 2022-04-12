<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="fk_com_pub", columns={"id_pub"}), @ORM\Index(name="fk_comment", columns={"id_utilisateur"})})
 * @ORM\Entity
 */
class Commentaire
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
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \Publication
     *
     * @ORM\ManyToOne(targetEntity="Publication")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pub", referencedColumnName="id")
     * })
     */
    private $idPub;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;



    public function getId() {
    	return $this->id;
    }

    public function getContenue() {
    	return $this->contenue;
    }

    /**
    * @param $contenue
    */
    public function setContenue($contenue) {
    	$this->contenue = $contenue;
    }

    public function getCreatedAt() {
    	return $this->createdAt;
    }

    /**
    * @param $createdAt
    */
    public function setCreatedAt($createdAt) {
    	$this->createdAt = $createdAt;
    }

    public function getIdPub() {
    	return $this->idPub;
    }

    /**
    * @param $idPub
    */
    public function setIdPub($idPub) {
    	$this->idPub = $idPub;
    }

    public function getIdUtilisateur() 
    {
    	return $this->idUtilisateur;
    }

    /**
    * @param $idUtilisateur
    */
    public function setIdUtilisateur(?int $idUtilisateur) 
    {
    	$this->idUtilisateur = $idUtilisateur;
    }
}
