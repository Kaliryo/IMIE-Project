<?php

namespace VendorProjet\imieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CV
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VendorProjet\imieBundle\Entity\CVRepository")
 */
class CV
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
     * @ORM\Column(name="idCV", type="integer")
     */
    private $idCV;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=255)
     */
    private $resume;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visibility", type="boolean")
     */
    private $visibility;

    /**
     * @ORM\OneToMany(targetEntity="Skill", mappedBy="skills")
     * @var Skill
     */
    private $skills;
    
    /**
     * @ORM\OneToMany(targetEntity="Experiment", mappedBy="experiments")
     * @var Experiment
     */
    private $experiments;
    
    
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
     * Set idCV
     *
     * @param integer $idCV
     * @return CV
     */
    public function setIdCV($idCV)
    {
        $this->idCV = $idCV;
    
        return $this;
    }

    /**
     * Get idCV
     *
     * @return integer 
     */
    public function getIdCV()
    {
        return $this->idCV;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return CV
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
     * Set visibility
     *
     * @param boolean $visibility
     * @return CV
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    
        return $this;
    }

    /**
     * Get visibility
     *
     * @return boolean 
     */
    public function getVisibility()
    {
        return $this->visibility;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add skills
     *
     * @param \VendorProjet\imieBundle\Entity\Skill $skills
     * @return CV
     */
    public function addSkill(\VendorProjet\imieBundle\Entity\Skill $skills)
    {
        $this->skills[] = $skills;
    
        return $this;
    }

    /**
     * Remove skills
     *
     * @param \VendorProjet\imieBundle\Entity\Skill $skills
     */
    public function removeSkill(\VendorProjet\imieBundle\Entity\Skill $skills)
    {
        $this->skills->removeElement($skills);
    }

    /**
     * Get skills
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Add experiments
     *
     * @param \VendorProjet\imieBundle\Entity\Experiment $experiments
     * @return CV
     */
    public function addExperiment(\VendorProjet\imieBundle\Entity\Experiment $experiments)
    {
        $this->experiments[] = $experiments;
    
        return $this;
    }

    /**
     * Remove experiments
     *
     * @param \VendorProjet\imieBundle\Entity\Experiment $experiments
     */
    public function removeExperiment(\VendorProjet\imieBundle\Entity\Experiment $experiments)
    {
        $this->experiments->removeElement($experiments);
    }

    /**
     * Get experiments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExperiments()
    {
        return $this->experiments;
    }
}
