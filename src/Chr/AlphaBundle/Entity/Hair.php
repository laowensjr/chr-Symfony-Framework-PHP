<?php

namespace Chr\AlphaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hair
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Hair
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
     * @ORM\Column(name="hairtype", type="string", length=255)
     */
    private $hairtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="inch", type="integer")
     */
    private $inch;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="string", length=255)
     */
    private $style;

    /**
     * @var string
     *
     * @ORM\Column(name="page_summary", type="string", length=255)
     */
    private $pageSummary;

    /**
     * @var string
     *
     * @ORM\Column(name="featured_hair_pic", type="string", length=255)
     */
    private $featuredHairPic;

    /**
     * @var string
     *
     * @ORM\Column(name="featured_hair_heading", type="string", length=255)
     */
    private $featuredHairHeading;

    /**
     * @var string
     *
     * @ORM\Column(name="featured_hair_summary", type="string", length=255)
     */
    private $featuredHairSummary;

    /**
     * @var string
     *
     * @ORM\Column(name="featured_hair_price", type="decimal", scale=2)
     */
    private $featuredHairPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="featured_hair_vendor", type="string", length=255)
     */
    private $featuredHairVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="featured_hair_position", type="string", length=255)
     */
    private $featuredHairPosition;




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
     * Set hairtype
     *
     * @param string $hairtype
     * @return Hair
     */
    public function setHairtype($hairtype)
    {
        $this->hairtype = $hairtype;

        return $this;
    }

    /**
     * Get hairtype
     *
     * @return string 
     */
    public function getHairtype()
    {
        return $this->hairtype;
    }

    /**
     * Set inch
     *
     * @param integer $inch
     * @return Hair
     */
    public function setInch($inch)
    {
        $this->inch = $inch;

        return $this;
    }

    /**
     * Get inch
     *
     * @return integer 
     */
    public function getInch()
    {
        return $this->inch;
    }

    /**
     * Set style
     *
     * @param string $style
     * @return Hair
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set pageSummary
     *
     * @param string $pageSummary
     * @return Hair
     */
    public function setPageSummary($pageSummary)
    {
        $this->pageSummary = $pageSummary;

        return $this;
    }

    /**
     * Get pageSummary
     *
     * @return string 
     */
    public function getPageSummary()
    {
        return $this->pageSummary;
    }

    /**
     * Set featuredHairPic
     *
     * @param string $featuredHairPic
     * @return Hair
     */
    public function setFeaturedHairPic($featuredHairPic)
    {
        $this->featuredHairPic = $featuredHairPic;

        return $this;
    }

    /**
     * Get featuredHairPic
     *
     * @return string 
     */
    public function getFeaturedHairPic()
    {
        return $this->featuredHairPic;
    }

    /**
     * Set featuredHairHeading
     *
     * @param string $featuredHairHeading
     * @return Hair
     */
    public function setFeaturedHairHeading($featuredHairHeading)
    {
        $this->featuredHairHeading = $featuredHairHeading;

        return $this;
    }

    /**
     * Get featuredHairHeading
     *
     * @return string 
     */
    public function getFeaturedHairHeading()
    {
        return $this->featuredHairHeading;
    }

    /**
     * Set featuredHairSummary
     *
     * @param string $featuredHairSummary
     * @return Hair
     */
    public function setFeaturedHairSummary($featuredHairSummary)
    {
        $this->featuredHairSummary = $featuredHairSummary;

        return $this;
    }

    /**
     * Get featuredHairSummary
     *
     * @return string 
     */
    public function getFeaturedHairSummary()
    {
        return $this->featuredHairSummary;
    }

    /**
     * Set featuredHairPrice
     *
     * @param string $featuredHairPrice
     * @return Hair
     */
    public function setFeaturedHairPrice($featuredHairPrice)
    {
        $this->featuredHairPrice = $featuredHairPrice;

        return $this;
    }

    /**
     * Get featuredHairPrice
     *
     * @return string 
     */
    public function getFeaturedHairPrice()
    {
        return $this->featuredHairPrice;
    }

    /**
     * Set featuredHairVendor
     *
     * @param string $featuredHairVendor
     * @return Hair
     */
    public function setFeaturedHairVendor($featuredHairVendor)
    {
        $this->featuredHairVendor = $featuredHairVendor;

        return $this;
    }

    /**
     * Get featuredHairVendor
     *
     * @return string 
     */
    public function getFeaturedHairVendor()
    {
        return $this->featuredHairVendor;
    }

    /**
     * Set featuredHairPosition
     *
     * @param integer $featuredHairPosition
     * @return Hair
     */
    public function setFeaturedHairPosition($featuredHairPosition)
    {
        $this->featuredHairPosition = $featuredHairPosition;

        return $this;
    }

    /**
     * Get featuredHairPosition
     *
     * @return integer
     */
    public function getFeaturedHairPosition()
    {
        return $this->featuredHairPosition;
    }


}
