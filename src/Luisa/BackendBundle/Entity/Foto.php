<?php

namespace Luisa\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foto
 *
 * @ORM\Table(name="foto__foto")
 * @ORM\Entity(repositoryClass="Luisa\BackendBundle\Repository\FotoRepository")
 */
class Foto
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
    * @ORM\Column(type="string")
    */
    private $name;


    /**
    * @ORM\ManyToOne(targetEntity="FotoCategoria", inversedBy="foto")
    * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id", onDelete="SET NULL")
    */
    private $categoria;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Gallery")
     * @ORM\JoinColumn(name="gallery_id", referencedColumnName="id", onDelete="SET NULL")
     */
     private $gallery;


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
     * Set name
     *
     * @param string $name
     *
     * @return Foto
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set categoria
     *
     * @param \Luisa\BackendBundle\Entity\FotoCategoria $categoria
     *
     * @return Foto
     */
    public function setCategoria(\Luisa\BackendBundle\Entity\FotoCategoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \Luisa\BackendBundle\Entity\FotoCategoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set didascalia
     *
     * @param string $didascalia
     *
     * @return FotoCategoria
     */
    public function setDidascalia($didascalia)
    {
        $this->didascalia = $didascalia;

        return $this;
    }

    /**
     * Get didascalia
     *
     * @return string
     */
    public function getDidascalia()
    {
        return $this->didascalia;
    }


    /**
     * Set gallery
     *
     * @param \Application\Sonata\MediaBundle\Entity\Gallery $gallery
     *
     * @return Foto
     */
    public function setGallery(\Application\Sonata\MediaBundle\Entity\Gallery $gallery = null)
    {
        $this->gallery = $gallery;

        return $this;
    }

    /**
     * Get gallery
     *
     * @return \Application\Sonata\MediaBundle\Entity\Gallery
     */
    public function getGallery()
    {
        return $this->gallery;
    }

}
