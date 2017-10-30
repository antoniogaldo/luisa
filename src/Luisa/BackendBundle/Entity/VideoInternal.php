<?php

namespace Luisa\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video__internal")
 * @ORM\Entity(repositoryClass="Luisa\BackendBundle\Repository\VideoInternalRepository")
 */
class VideoInternal
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
  * @ORM\Column(type="string", length=255)
  */
  private $name;

  /**
   * @var boolean
   *
   * @ORM\Column(name="active", type="boolean")
   */
  private $active;

  /**
   * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
   * @ORM\JoinColumn(name="image_id", referencedColumnName="id", onDelete="SET NULL")
   */
  private $image;


  /**
   * @var string
   *
   * @ORM\Column(name="rotta", type="string", nullable=true)
   */
  private $rotta;

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
     * @return VideoInternal
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
     * @return VideoInternal
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
     * Set rotta
     *
     * @param string $rotta
     *
     * @return VideoInternal
     */
    public function setRotta($rotta)
    {
        $this->rotta = $rotta;

        return $this;
    }

    /**
     * Get rotta
     *
     * @return string
     */
    public function getRotta()
    {
        return $this->rotta;
    }

    /**
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @return VideoInternal
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
}
