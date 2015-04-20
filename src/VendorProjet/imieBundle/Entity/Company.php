<?php

namespace VendorProjet\imieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VendorProjet\imieBundle\Entity\CompanyRepository")
 */
class Company
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
     * @ORM\Column(name="idCompany", type="integer")
     */
    private $idCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=255)
     */
    private $siret;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStartFriendship", type="datetime")
     */
    private $dateStartFriendship;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="salariesNumber", type="integer")
     */
    private $salariesNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=255)
     */
    private $resume;

    /**
     * @ORM\ManyToOne(targetEntity="BusinessSector")
     * @ORM\JoinColumn(name="BusinessSectorId", referencedColumnName="id")
     * @var BusinessSector
     */
    private $businessSector;
    
    /**
     * @ORM\ManyToOne(targetEntity="Department")
     * @ORM\JoinColumn(name="DepartmentId", referencedColumnName="id")
     * @var unknown
     */
    private $department;

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
     * Set idCompany
     *
     * @param integer $idCompany
     * @return Company
     */
    public function setIdCompany($idCompany)
    {
        $this->idCompany = $idCompany;
    
        return $this;
    }

    /**
     * Get idCompany
     *
     * @return integer 
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return string
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
     * Set siret
     *
     * @param string $siret
     * @return Company
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;
    
        return $this;
    }

    /**
     * Get siret
     *
     * @return string 
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set dateStartFriendship
     *
     * @param \DateTime $dateStartFriendship
     * @return Company
     */
    public function setDateStartFriendship($dateStartFriendship)
    {
        $this->dateStartFriendship = $dateStartFriendship;
    
        return $this;
    }

    /**
     * Get dateStartFriendship
     *
     * @return \DateTime 
     */
    public function getDateStartFriendship()
    {
        return $this->dateStartFriendship;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Company
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set salariesNumber
     *
     * @param integer $salariesNumber
     * @return Company
     */
    public function setSalariesNumber($salariesNumber)
    {
        $this->salariesNumber = $salariesNumber;
    
        return $this;
    }

    /**
     * Get salariesNumber
     *
     * @return integer 
     */
    public function getSalariesNumber()
    {
        return $this->salariesNumber;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Company
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    
        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set businessSector
     *
     * @param \VendorProjet\imieBundle\Entity\BusinessSector $businessSector
     * @return Company
     */
    public function setBusinessSector(\VendorProjet\imieBundle\Entity\BusinessSector $businessSector = null)
    {
        $this->businessSector = $businessSector;
    
        return $this;
    }

    /**
     * Get businessSector
     *
     * @return \VendorProjet\imieBundle\Entity\BusinessSector 
     */
    public function getBusinessSector()
    {
        return $this->businessSector;
    }

    /**
     * Set department
     *
     * @param \VendorProjet\imieBundle\Entity\Department $department
     * @return Company
     */
    public function setDepartment(\VendorProjet\imieBundle\Entity\Department $department = null)
    {
        $this->department = $department;
    
        return $this;
    }

    /**
     * Get department
     *
     * @return \VendorProjet\imieBundle\Entity\Department 
     */
    public function getDepartment()
    {
        return $this->department;
    }
}
