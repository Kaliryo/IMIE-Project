<?php

namespace VendorProjet\imieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experiment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VendorProjet\imieBundle\Entity\ExperimentRepository")
 */
class Experiment
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
     * @ORM\Column(name="idExperiment", type="integer")
     */
    private $idExperiment;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=255)
     */
    private $resume;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStart", type="datetime")
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnd", type="datetime")
     */
    private $dateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="companyName", type="string", length=255)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255)
     */
    private $place;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentNumber", type="integer")
     */
    private $departmentNumber;


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
     * Set idExperiment
     *
     * @param integer $idExperiment
     * @return Experiment
     */
    public function setIdExperiment($idExperiment)
    {
        $this->idExperiment = $idExperiment;
    
        return $this;
    }

    /**
     * Get idExperiment
     *
     * @return integer 
     */
    public function getIdExperiment()
    {
        return $this->idExperiment;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Experiment
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
     * Set title
     *
     * @param string $title
     * @return Experiment
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return Experiment
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    
        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Experiment
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    
        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     * @return Experiment
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    
        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Experiment
     */
    public function setPlace($place)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set departmentNumber
     *
     * @param integer $departmentNumber
     * @return Experiment
     */
    public function setDepartmentNumber($departmentNumber)
    {
        $this->departmentNumber = $departmentNumber;
    
        return $this;
    }

    /**
     * Get departmentNumber
     *
     * @return integer 
     */
    public function getDepartmentNumber()
    {
        return $this->departmentNumber;
    }
}
