<?php

namespace Luisa\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="Luisa\BackendBundle\Repository\VideoRepository")
 */
class Video
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
   * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
   * @ORM\JoinColumn(name="video_id", referencedColumnName="id", onDelete="SET NULL")
   */
  private $video;


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
     * @return Video
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
     * @return Video
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
     * Set video
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $video
     *
     * @return Video
     */
    public function setVideo(\Application\Sonata\MediaBundle\Entity\Media $video = null)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getVideo()
    {
        return $this->video;
    }


    /**
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @return Video
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
