<?php

namespace VendorProjet\imieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VendorProjet\imieBundle\Entity\OfferRepository")
 */
class Offer
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMaxValidityOffer", type="datetime")
     */
    private $dateMaxValidityOffer;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="TypeOffer")
     * @ORM\JoinColumn(name="TypeOfferId", referencedColumnName="id")
     * @var TypeOffer
     */
    private $typeOffer;
    
    /**
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumn(name="CompanyId", referencedColumnName="id")
     * @var Company
     */
    private $company;
    
    /**
     * @ORM\OneToMany(targetEntity="Skill", mappedBy="skills")
     * @var Skill
     */
    private $skills;
    
    
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
     * Set idOffer
     *
     * @param integer $idOffer
     * @return Offer
     */
    public function setIdOffer($idOffer)
    {
        $this->idOffer = $idOffer;
    
        return $this;
    }

    /**
     * Get idOffer
     *
     * @return integer 
     */
    public function getIdOffer()
    {
        return $this->idOffer;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Offer
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
     * Set dateMaxValidityOffer
     *
     * @param \DateTime $dateMaxValidityOffer
     * @return Offer
     */
    public function setDateMaxValidityOffer($dateMaxValidityOffer)
    {
        $this->dateMaxValidityOffer = $dateMaxValidityOffer;
    
        return $this;
    }

    /**
     * Get dateMaxValidityOffer
     *
     * @return \DateTime 
     */
    public function getDateMaxValidityOffer()
    {
        return $this->dateMaxValidityOffer;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Offer
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
     * Set content
     *
     * @param string $content
     * @return Offer
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set category
     *
     * @param \VendorProjet\imieBundle\Entity\TypeOffer $category
     * @return Offer
     */
    public function setCategory(\VendorProjet\imieBundle\Entity\TypeOffer $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \VendorProjet\imieBundle\Entity\TypeOffer 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set company
     *
     * @param \VendorProjet\imieBundle\Entity\Company $company
     * @return Offer
     */
    public function setCompany(\VendorProjet\imieBundle\Entity\Company $company = null)
    {
        $this->company = $company;
    
        return $this;
    }

    /**
     * Get company
     *
     * @return \VendorProjet\imieBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Add skills
     *
     * @param \VendorProjet\imieBundle\Entity\Skill $skills
     * @return Offer
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
     * Set typeOffer
     *
     * @param \VendorProjet\imieBundle\Entity\TypeOffer $typeOffer
     * @return Offer
     */
    public function setTypeOffer(\VendorProjet\imieBundle\Entity\TypeOffer $typeOffer = null)
    {
        $this->typeOffer = $typeOffer;
    
        return $this;
    }

    /**
     * Get typeOffer
     *
     * @return \VendorProjet\imieBundle\Entity\TypeOffer 
     */
    public function getTypeOffer()
    {
        return $this->typeOffer;
    }
}
