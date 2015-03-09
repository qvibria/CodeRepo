<?php
/**
 * Created by PhpStorm.
 * User: Klay
 * Date: 08.03.15
 * Time: 18:02
 */
namespace Igor\TaskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\Table( name = "user_story" )
 *
 * Class UserStory incapsulate all date of User Stories
 * It's an entity and maps to a user_story table in MySQL
 * @package TaskBundle\Entity
 */
class UserStory {
    // Обязательные поля
    /**
     * @ORM\Column( type = "integer")
     * @ORM\Id
     * @ORM\GeneratedValue 
     * @var integer
     */
    protected $id;
    /**
     * @ORM\Column( type = "string", length = 100)
     * @var string
     */
    protected $title;
    /**
     * @ORM\Column( type = "integer" )
     * @var integer
     */
    protected $importance;
    /**
     * @ORM\Column( type = "integer" )
     * @var integer
     */
    protected $initialEstimate;

    /**
     * @ORM\Column( type = "string", length = 255)
     * @var string
     */
    protected $howToDemo;

    //Дополнительные поля

    /**
     * @ORM\Column( type = "string", length = 50)
     * @var string
     */
    protected $category;

    /*

    NOt IMPLEMENTED YET
    WAITS FOR A DEPENDENT ENTITIES
    TODO: IMPLEMENT "USER" ENTITY
    TODO: IMPLEMENT "COMPONENT" ENTITY
    ============================
    protected $components;
    protected $requestInitiator;
    protected $bugTrackId;
    ============================
     */
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
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Set title
  å   *
     * @param string $title
     * @return UserStory
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
     * Set importance
     *
     * @param integer $importance
     * @return UserStory
     */
    public function setImportance($importance)
    {
        $this->importance = $importance;

        return $this;
    }

    /**
     * Get importance
     *
     * @return integer 
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * Set initialEstimate
     *
     * @param integer $initialEstimate
     * @return UserStory
     */
    public function setInitialEstimate($initialEstimate)
    {
        $this->initialEstimate = $initialEstimate;

        return $this;
    }

    /**
     * Get initialEstimate
     *
     * @return integer 
     */
    public function getInitialEstimate()
    {
        return $this->initialEstimate;
    }

    /**
     * Set howToDemo
     *
     * @param string $howToDemo
     * @return UserStory
     */
    public function setHowToDemo($howToDemo)
    {
        $this->howToDemo = $howToDemo;

        return $this;
    }

    /**
     * Get howToDemo
     *
     * @return string 
     */
    public function getHowToDemo()
    {
        return $this->howToDemo;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return UserStory
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
