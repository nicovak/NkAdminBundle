<?php

namespace Nk\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Seo
 *
 * @ORM\Table(name="nk_seo")
 * @ORM\Entity
 */
class Seo
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
     *      minMessage = "Le meta-titre doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Le meta-titre ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Assert\NotBlank(message="Le meta-titre ne peut être vide.")
     * @ORM\Column(name="metaTitre", type="string", length=255)
     */
    private $metaTitre;

    /**
     * @var string
     * @Assert\Length(
     *      min = "3",
     *      max = "255",
     *      minMessage = "La meta-description doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "La meta-description ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Assert\NotBlank(message="La meta-description ne peut être vide.")
     * @ORM\Column(name="metaDescription", type="string", length=255)
     */
    private $metaDescription;

    public function __toString() {
        return $this->getMetaTitre();
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
     * Set metaTitre
     *
     * @param string $metaTitre
     * @return Seo
     */
    public function setMetaTitre($metaTitre)
    {
        $this->metaTitre = $metaTitre;

        return $this;
    }

    /**
     * Get metaTitre
     *
     * @return string 
     */
    public function getMetaTitre()
    {
        return $this->metaTitre;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     * @return Seo
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string 
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }
}
