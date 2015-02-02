<?php

namespace Nk\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Parameter
 *
 * @ORM\Table(name="Parameter")
 * @ORM\Entity
 */
class Parameter
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\Length(
     *      min = "3",
     *      max = "30",
     *      minMessage = "Le code doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Le code ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Assert\NotBlank(message="Le code ne peut être vide.")
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var string
     * @Assert\Length(
     *      min = "3",
     *      max = "255",
     *      minMessage = "Le libellé doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Le libellé ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Assert\NotBlank(message="Le libellé ne peut être vide.")
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     * @Assert\Length(
     *      min = "3",
     *      max = "100",
     *      minMessage = "La valeur doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "La valeur ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Assert\NotBlank(message="Le libellé ne peut être vide.")
     * @ORM\Column(name="valeur", type="string", length=100, nullable=false)
     */
    private $valeur;

    /**
     * @var string
     * @ORM\Column(name="contenu", type="text", nullable=true)
     */
    private $contenu;
    

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
     * Set code
     *
     * @param string $code
     * @return Parameter
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Parameter
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     * @return Parameter
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }


    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Parameter
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
}
