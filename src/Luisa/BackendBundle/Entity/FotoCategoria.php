<?php

namespace Luisa\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FotoCategoria
 *
 * @ORM\Table(name="foto__fotocategoria")
 * @ORM\Entity(repositoryClass="Luisa\BackendBundle\Repository\FotoCategoriaRepository")
 */
class FotoCategoria
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
   * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
   * @ORM\JoinColumn(name="image_id", referencedColumnName="id", onDelete="SET NULL")
   */
  private $image;

  /**
   * @var boolean
   *
   * @ORM\Column(name="active", type="boolean")
   */
  private $active;

  /**
   * @var boolean
   *
   * @ORM\Column(name="vertical", type="boolean")
   */
  private $vertical;

  /**
  * @ORM\OneToMany(targetEntity="Foto", mappedBy="categoria", cascade={"persist"})
  */
  private $foto;


  /**
   * Constructor
   */
  public function __construct()
  {
      $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return FotoCategoria
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
     * Set active
     *
     * @param boolean $active
     *
     * @return FotoCategoria
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set vertical
     *
     * @param boolean $vertical
     *
     * @return FotoCategoria
     */
    public function setVertical($vertical)
    {
        $this->vertical = $vertical;

        return $this;
    }

    /**
     * Get vertical
     *
     * @return boolean
     */
    public function getVertical()
    {
        return $this->vertical;
    }

    /**
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @return FotoCategoria
     */
    public function setImage(\Application\Sonata\MediaBundle\Entity\Media $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add foto
     *
     * @param \Luisa\BackendBundle\Entity\Foto $foto
     *
     * @return FotoCategoria
     */
    public function addFoto(\Luisa\BackendBundle\Entity\Foto $foto)
    {
        $this->foto[] = $foto;

        return $this;
    }

    /**
     * Remove foto
     *
     * @param \Luisa\BackendBundle\Entity\Foto $foto
     */
    public function removeFoto(\Luisa\BackendBundle\Entity\Foto $foto)
    {
        $this->foto->removeElement($foto);
    }

    /**
     * Get foto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFoto()
    {
        return $this->foto;
    }

    public function __toString()
    {
        return ($this->name) ? $this->name : 'Nuova foto';
    }


}
