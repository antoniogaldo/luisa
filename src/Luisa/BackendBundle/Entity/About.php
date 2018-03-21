<?php

namespace Luisa\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="about")
 * @ORM\Entity(repositoryClass="Luisa\BackendBundle\Repository\AboutRepository")
 */
class About
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
   * @var boolean
   *
   * @ORM\Column(name="active", type="boolean")
   */
  private $active;

  /**
  * @var text
  *
  * @ORM\Column(name="about", type="text",nullable=true)
  */
  private $about;




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
     * Set active
     *
     * @param boolean $active
     *
     * @return About
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
     * Set programma
     *
     * @param string $programma
     *
     * @return About
     */
    public function setProgramma($programma)
    {
        $this->programma = $programma;

        return $this;
    }

    /**
     * Get programma
     *
     * @return string
     */
    public function getProgramma()
    {
        return $this->programma;
    }

    /**
     * Set about
     *
     * @param string $about
     *
     * @return About
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }
}
