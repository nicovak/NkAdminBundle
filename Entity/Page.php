<?php

namespace Nk\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Page
 *
 * @ORM\Table(name="nk_page")
 * @ORM\Entity
 */
class Page
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\Length(
     *      min = "3",
     *      max = "255",
     *      minMessage = "Le titre doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Le titre ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Assert\NotBlank(message="Le titre ne peut être vide.")
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     * @Assert\Length(
     *      min = "3",
     *      max = "255",
     *      minMessage = "La description doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "La description ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Assert\NotBlank(message="La description ne peut être vide.")
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(name="contenu", type="text", nullable=true)
     */
    private $contenu;

    /**
     * @var \Url
     * @Gedmo\Slug(fields={"url"})
     * @ORM\Column(name="url", type="string", length=100, nullable=false)
     */
    private $url;

    /**
     * @var \Seo
     *
     * @ORM\OneToOne(targetEntity="Seo", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="id_seo", referencedColumnName="id")
     */
    private $seo;

    /**
     * @return string
     */
    public function __toString() {
        return $this->getTitre();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Page
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Page
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Page
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Page
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set seo
     *
     * @param Seo $seo
     * @return Page
     */
    public function setSeo(Seo $seo = null)
    {
        $this->seo = $seo;

        return $this;
    }

    /**
     * Get seo
     *
     * @return Seo
     */
    public function getSeo()
    {
        return $this->seo;
    }


}
