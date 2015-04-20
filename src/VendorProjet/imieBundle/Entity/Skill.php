<?php

namespace VendorProjet\imieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VendorProjet\imieBundle\Entity\SkillRepository")
 */
class Skill
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
     * @ORM\Column(name="idSkill", type="integer")
     */
    private $idSkill;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=255)
     */
    private $resume;

    /** 
     * @var SkillType
     * 
     * @ORM\ManyToOne(targetEntity="SkillType")
     * @ORM\JoinColumn(name="SkillTypeId", referencedColumnName="id")
     */
    private $skillType;
    
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
     * Set idSkill
     *
     * @param integer $idSkill
     * @return Skill
     */
    public function setIdSkill($idSkill)
    {
        $this->idSkill = $idSkill;
    
        return $this;
    }

    /**
     * Get idSkill
     *
     * @return integer 
     */
    public function getIdSkill()
    {
        return $this->idSkill;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Skill
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Skill
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
     * Set SkillType
     *
     * @param \VendorProjet\imieBundle\Entity\SkillType $typeSkill
     * @return Skill
     */
    public function setTypeSkill(\VendorProjet\imieBundle\Entity\SkillType $skillType = null)
    {
        $this->skillType = $skillType;
    
        return $this;
    }

    /**
     * Get SkillType
     *
     * @return \VendorProjet\imieBundle\Entity\SkillType 
     */
    public function getSkillType()
    {
        return $this->skillType;
    }
}
