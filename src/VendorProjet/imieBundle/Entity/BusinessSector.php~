<?php

namespace VendorProjet\imieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BusinessSector
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VendorProjet\imieBundle\Entity\BusinessSectorRepository")
 */
class BusinessSector
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
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=255)
     */
    private $resume;

    /**
     * @ORM\OneToMany(targetEntity="Company", mappedBy="companies")
     * @var unknown
     */
    private $companies;
    
    
     /**
     * Set idBusinessSector
     *
     * @param integer $idBusinessSector
     * @return BusinessSector
     */
    public function setIdBusinessSector($idBusinessSector)
    {
        $this->idBusinessSector = $idBusinessSector;
    
        return $this;
    }

    /**
     * Get idBusinessSector
     *
     * @return integer 
     */
    public function getIdBusinessSector()
    {
        return $this->idBusinessSector;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return BusinessSector
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
     * Set resume
     *
     * @param string $resume
     * @return BusinessSector
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
     * Constructor
     */
    public function __construct()
    {
        $this->companies = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add companies
     *
     * @param \VendorProjet\imieBundle\Entity\Company $companies
     * @return BusinessSector
     */
    public function addCompany(\VendorProjet\imieBundle\Entity\Company $companies)
    {
        $this->companies[] = $companies;
    
        return $this;
    }

    /**
     * Remove companies
     *
     * @param \VendorProjet\imieBundle\Entity\Company $companies
     */
    public function removeCompany(\VendorProjet\imieBundle\Entity\Company $companies)
    {
        $this->companies->removeElement($companies);
    }

    /**
     * Get companies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompanies()
    {
        return $this->companies;
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
}
