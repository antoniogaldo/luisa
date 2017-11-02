<?php

namespace Luisa\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalCategoria
 *
 * @ORM\Table(name="personal__personalcategoria")
 * @ORM\Entity()
 */
class PersonalCategoria
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
  * @ORM\OneToMany(targetEntity="Personal", mappedBy="categoria", cascade={"persist"})
  */
  private $foto;

  /**
   * Constructor
   */
  public function __construct()
  {
      $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
  }


  public function __toString()
  {
      return ($this->name) ? $this->name : 'Nuova Personal';
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
     * @return PersonalCategoria
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
     * @return PersonalCategoria
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
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @return PersonalCategoria
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
     * @param \Luisa\BackendBundle\Entity\Personal $foto
     *
     * @return PersonalCategoria
     */
    public function addFoto(\Luisa\BackendBundle\Entity\Personal $foto)
    {
        $this->foto[] = $foto;

        return $this;
    }

    /**
     * Remove foto
     *
     * @param \Luisa\BackendBundle\Entity\Personal $foto
     */
    public function removeFoto(\Luisa\BackendBundle\Entity\Personal $foto)
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
}
