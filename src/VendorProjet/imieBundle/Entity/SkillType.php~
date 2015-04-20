<?php

namespace VendorProjet\imieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillType
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VendorProjet\imieBundle\Entity\SkillTypeRepository")
 */
class SkillType
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
     * @ORM\Column(name="idTypeSkill", type="integer")
     */
    private $idTypeSkill;

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
     * Set idTypeSkill
     *
     * @param integer $idTypeSkill
     * @return SkillType
     */
    public function setIdTypeSkill($idTypeSkill)
    {
        $this->idTypeSkill = $idTypeSkill;
    
        return $this;
    }

    /**
     * Get idTypeSkill
     *
     * @return integer 
     */
    public function getIdTypeSkill()
    {
        return $this->idTypeSkill;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return SkillType
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
