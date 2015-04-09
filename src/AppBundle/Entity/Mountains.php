<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mountains
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Mountains
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
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="[C[C[C[[C[C[C[A[C[B[B[C[C[D[Cheight", type="integer")
     */
    private $[C[C[C[[C[C[C[A[C[B[B[C[C[D[Cheight;


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
     * @return Mountains
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
     * Set [C[C[C[[C[C[C[A[C[B[B[C[C[D[Cheight
     *
     * @param integer $[C[C[C[[C[C[C[A[C[B[B[C[C[D[Cheight
     * @return Mountains
     */
    public function set[C[C[C[[C[C[C[A[C[B[B[C[C[D[Cheight($[C[C[C[[C[C[C[A[C[B[B[C[C[D[Cheight)
    {
        $this->[C[C[C[[C[C[C[A[C[B[B[C[C[D[Cheight = $[C[C[C[[C[C[C[A[C[B[B[C[C[D[Cheight;

        return $this;
    }

    /**
     * Get [C[C[C[[C[C[C[A[C[B[B[C[C[D[Cheight
     *
     * @return integer 
     */
    public function get[C[C[C[[C[C[C[A[C[B[B[C[C[D[Cheight()
    {
        return $this->[C[C[C[[C[C[C[A[C[B[B[C[C[D[Cheight;
    }
}
