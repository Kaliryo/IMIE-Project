<?php

namespace VendorProjet\imieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Department
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VendorProjet\imieBundle\Entity\DepartmentRepository")
 */
class Department
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
     * @var integer
     *
     * @ORM\Column(name="idDepartment", type="integer")
     */
    private $idDepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set idDepartment
     *
     * @param integer $idDepartment
     * @return Department
     */
    public function setIdDepartment($idDepartment)
    {
        $this->idDepartment = $idDepartment;
    
        return $this;
    }

    /**
     * Get idDepartment
     *
     * @return integer 
     */
    public function getIdDepartment()
    {
        return $this->idDepartment;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Department
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
}
